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
    public function EditBanner($id)
    {
        $banner = Banner::findOrFail($id);
        return view('backend.banner.edit_banner', compact('banner'));
    }
    public function UpdateBanner(Request $request)
    {

        $banner_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {

            $image = $request->file('image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $save_url = 'upload/banners/' . $filename;
            $image->move(public_path('upload/banners'), $save_url);

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Banner::findOrFail($banner_id)->update([
                'title' => $request->title,
                'url' => $request->url,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Banner Updated Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.banner')->with($notification);
        } else {

            Banner::findOrFail($banner_id)->update([
                'title' => $request->title,
                'url' => $request->url,
            ]);

            $notification = array(
                'message' => 'Banner Updated Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.Banner')->with($notification);
        }
    }
    public function DeleteBanner($id)
    {

        $banner = Banner::findOrFail($id);
        $img = $banner->image;
        unlink($img);

        Banner::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Banner Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
