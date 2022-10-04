<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\ValidatePortoflio;
use App\Models\Portofolio;
use Illuminate\Http\Request;

use Image;
use App\Traits\Notification;

class PortofolioController extends Controller
{
    use Notification;
    public function allPortofolio()
    {
        $portofolios = Portofolio::latest()->get();

        return view('admin.portofolio.all_portofolio', compact('portofolios'));
    }

    public function addPortoflio()
    {
        return view('admin.portofolio.add_portofolio');
    }

    public function store(Request $request)
    {
        $portofolioImg = $request->file('image');

        $imgGenerateName = hexdec(uniqid()) . '.' . $portofolioImg->getClientOriginalExtension();

        Image::make($portofolioImg)->resize(1020, 519)->save('uploads/portofolio/' . $imgGenerateName);

        $saveUrl = 'uploads/portofolio/' . $imgGenerateName;

        Portofolio::create([
            'name' => $request->name,
            'title' => $request->title,
            'description' => $request->description,
            'image' => $saveUrl
        ]);

        return $this->notification('Portofolio Inserted Successfully', 'success', 'all.portofolio');

    }

    public function editPortofolio($id)
    {
        $portofolio = Portofolio::findOrFail($id);
        return view('admin.portofolio.edit', compact('portofolio'));
    }

    public function updatePortofolio(ValidatePortoflio $request)
    {
        $porto_id = $request->id;
        $portofolioToUpdate = Portofolio::findOrFail($porto_id);
        if ($request->file('image'))
        {
            $img = $request->file('image');

            $imgToDelete = Portofolio::findOrFail($porto_id)->image;

            $imgGenerateName = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();

            unlink($imgToDelete);

            Image::make($img)->resize(1020, 519)->save('uploads/portofolio/' . $imgGenerateName);

            $saveUrl = 'uploads/portofolio/' . $imgGenerateName;

            $portofolioToUpdate->update([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
                'image' => $saveUrl
            ]);

            return $this->notification('Portofolio Updated with new image', 'success', 'all.portofolio');

        }
        else
        {
            $portofolioToUpdate->update([
                'name' => $request->name,
                'title' => $request->title,
                'description' => $request->description,
            ]);

            return $this->notification('Portofolio Updated without image', 'success', 'all.portofolio');

        }


    }

    public function delete($id)
    {
        $portofolioToDelete = Portofolio::findOrFail($id);
        unlink($portofolioToDelete->image);
        $portofolioToDelete->delete();

        return $this->notification('Portofolio Deleted !', 'danger', 'all.portofolio');
    }

    public function portfolioDetails($id)
    {
        $portfolio = Portofolio::findOrFail($id);
        //$portfolio->image = Image::make($portfolio->image)->resize(850, 430);

        return view('app.portfolio.portfolio_details', compact('portfolio'));
    }

    public function showPortfolio()
    {
        $allPortfolio = Portofolio::latest()->get();

        return view('app.portfolio.home_portfolio', compact('allPortfolio'));
    }

}
