<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\About;
use App\Models\AboutMultiIcons;
use Illuminate\Support\Carbon;
use Image;
use App\Models\Blog;
class AboutController extends Controller
{
    public function index()
    {
        $about = About::find(1);
        $blogs = Blog::latest()->limit(3)->get();
        return view('app.about.about_index', compact('about', 'blogs'));
    }

    public function editAbout()
    {
        $about = About::find(1);
        return view('admin.home.edit_about', compact('about'));
    }

    public function updateAbout(Request $request)
    {
        $aboutID = $request->id;

        if ($request->file('about_img'))
        {
            $aboutImg = $request->file('about_img');

            $imgGenerateName = hexdec(uniqid()) . '.' . $aboutImg->getClientOriginalExtension(); //454334242.jpg

            Image::make($aboutImg)->resize(636, 852)->save('uploads/home_banner/'. $imgGenerateName);

            $imgPath = 'uploads/home_banner/'. $imgGenerateName;

            About::findOrFail($aboutID)
                -> update([
                    'title'         => $request->title,
                    'exp_content'   => $request->exp_content,
                    'about_img'    => $imgPath,
                    'desc'     => $request->desc
            ]);

            $notification = [
                'message' => 'About Info Updated Successfully',
                'alert-type' => 'success'
            ];

            return redirect() -> back()->with($notification);

        }
        else
        {
            About::findOrFail($aboutID)
                -> update([
                    'title' => $request->title,
                    'exp_content' => $request->exp_content,
                    'desc' => $request->desc,
                ]);

            $notification = [
                'message' => "About Info Updated Successfully",
                'alert-type' => 'success'
            ];

            return redirect()->back()->with($notification);
        }

    }

    // function to render multi image page
    public function multiImageView()
    {
        return view('admin.home.multi_image');
    }

    public function storeMultiIcons(Request $request)
    {
        $images = $request->file('multi_icons');

        foreach ($images as $image)
        {
            $imgGenerateName = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();

            Image::make($image)->resize(110, 110)->save('uploads/about_multi_icons/' . $imgGenerateName);

            $imgPath = 'uploads/about_multi_icons/' . $imgGenerateName;

            AboutMultiIcons::insert([
                'multi_icons' => $imgPath,
                'created_at' => Carbon::now()
            ]);
        }

        $notification = [
            'message' => 'Icons Inserted Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('about.view_multi_icons')->with($notification);


    }

    public function multiIconsPage()
    {
        $multiIcons = AboutMultiIcons::get();

        return view('admin.home.about_multi_icons', compact('multiIcons'));
    }

    // function to edit about icon
    public function editIcon($id)
    {
        // fetch icon image from db
        $icon = AboutMultiIcons::findOrFail($id);

        return view('admin.home.edit_icon', compact('icon'));

    }

    // function to update about icon
    public function updateIcon(Request $request)
    {
        $iconID = $request->icon_id;

        $iconPath = AboutMultiIcons::findOrFail($iconID)->multi_icons;
        unlink($iconPath);

        $iconToUpdate = $request->new_icon;

        $imgGenerateName = hexdec(uniqid()) . '.' . $iconToUpdate->getClientOriginalExtension();

        Image::make($iconToUpdate)->resize(110, 110)->save('uploads/about_multi_icons/' . $imgGenerateName);

        $saveUrl = 'uploads/about_multi_icons/' . $imgGenerateName;

        AboutMultiIcons::findOrFail($iconID)
            -> update([
                'multi_icons' => $saveUrl
        ]);

        $notification = [
            'message' => 'About Icon Updated Successfully',
            'alert-type' => 'success'
        ];

        return redirect()->route('about.view_multi_icons')->with($notification);
    }

    public function deleteIcon($id)
    {
        $iconToDelete = AboutMultiIcons::findOrFail($id);

        $imgPath = $iconToDelete->multi_icons;

        unlink($imgPath);

        $iconToDelete->delete();

        $notification = [
            'message' => 'About Icon Deleted Successfully',
            'alert-type' => 'danger'
        ];

        return redirect()->back()->with($notification);
    }

}
