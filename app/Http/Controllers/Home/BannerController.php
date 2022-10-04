<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\HomeBanner;
use Illuminate\Http\Request;
use Image;
//use Nette\Utils\Image;

class BannerController extends Controller
{
    public function index()
    {
        $bannerInfo = HomeBanner::find(1);
        //return $bannerInfo;
        return view('admin.home.edit_banner', compact('bannerInfo'));
    }

    public function updateBanner(Request $request)
    {
        $bannerID = $request->id;

        if ($request->file('banner_img'))
        {
            $bannerImg = $request->file('banner_img');

            $imgGenerateName = hexdec(uniqid()) . '.' . $bannerImg->getClientOriginalExtension(); //454334242.jpg

            Image::make($bannerImg)->resize(636, 852)->save('uploads/home_banner/'. $imgGenerateName);

            $imgPath = 'uploads/home_banner/'. $imgGenerateName;

            HomeBanner::findOrFail($bannerID)
                -> update([
                    'title'         => $request->title,
                    'short_intro'   => $request->short_intro,
                    'banner_img'    => $imgPath,
                    'video_url'     => $request->video_url
            ]);

            $notification = [
                'message' => 'Banner Info Updated Successfully',
                'alert-type' => 'success'
            ];

            return redirect() -> back()->with($notification);
        }
        else
        {
            HomeBanner::findOrFail($bannerID)
                -> update([
                    'title'         => $request->title,
                    'short_intro'   => $request->short_intro,
                    'video_url'     => $request->video_url
            ]);

            $notification = [
                'message' => 'Banner Info Updated Successfully',
                'alert-type' => 'success'
            ];

            return redirect() -> back()->with($notification);
        }


    }

}
