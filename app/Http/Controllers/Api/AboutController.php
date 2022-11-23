<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\UpdateAboutRequest;
use App\Http\Resources\AboutResource;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        return AboutResource::collection(About::all());
    }

    public function update(UpdateAboutRequest $request, About $about)
    {
        $about->update([
            'title' => $request->title,
            'desc' => $request->desc
        ]);
        return new AboutResource($about);
    }
}
