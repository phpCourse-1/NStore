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
    public function EditSlider($id)
    {
        $sliders = Slider::findOrFail($id);
        return view('backend.slider.edit_slider', compact('sliders'));
    }
    public function UpdateSlider(Request $request)
    {
        $slider_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('image')) {

            $image = $request->file('image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $save_url = 'upload/slider/' . $filename;
            $image->move(public_path('upload/slider'), $save_url);

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Slider::findOrFail($slider_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
                'image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Slider Updated Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.slider')->with($notification);
        } else {
            Slider::findOrFail($slider_id)->update([
                'title' => $request->title,
                'short_title' => $request->short_title,
            ]);

            $notification = array(
                'message' => 'Slider Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('all.slider')->with($notification);
        }
    }
    public function DeleteSlider($id)
    {

        $slider = Slider::findOrFail($id);
        $img = $slider->image;
        unlink($img);

        Slider::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Slider Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
