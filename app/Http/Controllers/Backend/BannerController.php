<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Banner;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    public function AllBanner()
    {
        $banners = Banner::latest()->get();
        return view('backend.banner.all_banner', compact('banners'));
    }
    public function AddBanner()
    {
        return view('backend.banner.add_banner');
    }
    public function StoreBanner(Request $request)
    {
        $image = $request->file('image');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $save_url = 'upload/banners/' . $filename;
        $image->move(public_path('upload/banners'), $save_url);

        Banner::insert([
            'title' => $request->title,
            'url' => $request->url,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Banner Inserted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.banner')->with($notification);
    }
}
