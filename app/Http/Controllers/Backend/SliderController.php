<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function AllSlider()
    {
        $sliders = Slider::latest()->get();
        return view('backend.slider.all_slider', compact('sliders'));
    }
    public function AddSlider()
    {
        return view('backend.slider.add_slider');
    }
    public function StoreSlider(Request $request)
    {

        $image = $request->file('image');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $save_url = 'upload/slider/' . $filename;
        $image->move(public_path('upload/slider'), $filename);

        Slider::insert([
            'title' => $request->title,
            'short_title' => $request->short_title,
            'image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Slider Inserted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.slider')->with($notification);
    }
}
