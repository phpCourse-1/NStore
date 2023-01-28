<?php

namespace App\Http\Controllers\Backend;

use App\Models\Brand;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BrandController extends Controller
{
    public function AllBrand()
    {
        $brands = Brand::latest()->get();
        return view('backend.brand.all_brands', compact('brands'));
    }
    public function AddBrand()
    {
        return view('backend.brand.add_brand');
    }
    public function StoreBrand(Request $request)
    {
        $image = $request->file('brand_image');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $save_url = 'upload/brand_images/' . $filename;
        $image->move(public_path('upload/brand_images'), $save_url);

        Brand::insert([
            'brand_name' => $request->brand_name,
            'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            'brand_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Brand Inserted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.brand')->with($notification);
    }
    public function EditBrand($id)
    {
        $brand = Brand::findOrFail($id);
        return view('backend.brand.edit_brand', compact('brand'));
    }
    public function UpdateBrand(Request $request)
    {

        $brand_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('brand_image')) {

            $image = $request->file('brand_image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $save_url = 'upload/brand_images/' . $filename;
            $image->move(public_path('upload/brand_images'), $save_url);

            Brand::insert([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
                'brand_image' => $save_url,
            ]);


            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Brand::findOrFail($brand_id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
                'brand_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Brand Updated with image Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.brand')->with($notification);
        } else {

            Brand::findOrFail($brand_id)->update([
                'brand_name' => $request->brand_name,
                'brand_slug' => strtolower(str_replace(' ', '-', $request->brand_name)),
            ]);

            $notification = array(
                'message' => 'Brand Updated without image Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.brand')->with($notification);
        }
    }
    public function DeleteBrand($id)
    {

        $brand = Brand::findOrFail($id);
        $img = $brand->brand_image;
        unlink($img);

        Brand::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Brand Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
