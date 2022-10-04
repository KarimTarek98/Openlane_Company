<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateFooter;
use App\Models\Footer;
use Illuminate\Http\Request;
use App\Traits\Notification;

class FooterController extends Controller
{
    use Notification;

    public function index()
    {
        $footer = Footer::find(1);

        return view('admin.footer.footer_info', compact('footer'));
    }

    public function editFooter($id)
    {
        $footer = Footer::find(1);

        return view('admin.footer.edit_footer', compact('footer'));
    }

    public function updateFooter(UpdateFooter $request)
    {
        $footerID = $request->id;

        Footer::findOrFail($footerID)->update([
            'phone_number' => $request->phone_number,
            'contact_text' => $request->contact_text,
            'country' => $request->country,
            'address_details' => $request->address_details,
            'company_email' => $request->company_email,
            'connect_small_desc' => $request->connect_small_desc,
            'copyright' => $request->copyright,

        ]);

        return $this->notification('Footer Updated Successfully', 'success', 'footer.display');

    }

}
