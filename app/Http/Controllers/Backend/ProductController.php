<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Brand;
use App\Models\Category;
use App\Models\MultiImg;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function AllProduct()
    {
        $products = Product::latest()->get();
        return view('backend.product.all_product', compact('products'));
    }
    public function AddProduct()
    {
        $activeVendor = User::where('status', 'active')->where('role', 'vendor')->latest()->get();
        $brands = Brand::latest()->get();
        $categories = Category::latest()->get();
        return view('backend.product.add_product', compact('brands', 'categories', 'activeVendor'));
    }
    public function StoreProduct(Request $request)
    {
        $image = $request->file('product_thambnail');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $save_url = 'upload/products/thambnail/' . $filename;
        $image->move(public_path('upload/products/thambnail/'), $filename);

        $product_id = Product::insert([
            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ', '-', $request->product_name)),
            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tags' => $request->product_tags,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,
            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,
            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,
            'product_thambnail' => $save_url,
            'vendor_id' => $request->vendor_id,
            'status' => 1,
            'created_at' => Carbon::now(),
        ]);

        $images = $request->file('multi_img');
        foreach ($images as $img) {
            $imgname = date('YmdHi') . $img->getClientOriginalName();
            $uploadPath = 'upload/products/multi_image/' . $imgname;
            $img->move(public_path('upload/products/multi_image/'), $uploadPath);
            MultiImg::insert([
                'product_id' => $product_id,
                'photo_name' => $uploadPath,
                'created_at' => Carbon::now(),
            ]);
        }
        $notification = array(
            'message' => 'Product Inserted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification);
    }
    public function EditProduct($id)
    {
        $multiImgs = MultiImg::where('product_id', $id)->get();
        $activeVendor = User::where('status', 'active')->where('role', 'vendor')->latest()->get();
        $brands = Brand::latest()->get();
        $categories = Category::latest()->get();
        $subcategory = SubCategory::latest()->get();
        $products = Product::findOrFail($id);
        return view('backend.product.edit_product', compact('brands', 'categories', 'activeVendor', 'products', 'subcategory', 'multiImgs'));
    }
    public function UpdateProduct(Request $request)
    {
        $product_id = $request->id;

        Product::findOrFail($product_id)->update([

            'brand_id' => $request->brand_id,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'product_name' => $request->product_name,
            'product_slug' => strtolower(str_replace(' ', '-', $request->product_name)),

            'product_code' => $request->product_code,
            'product_qty' => $request->product_qty,
            'product_tags' => $request->product_tags,
            'product_size' => $request->product_size,
            'product_color' => $request->product_color,

            'selling_price' => $request->selling_price,
            'discount_price' => $request->discount_price,
            'short_descp' => $request->short_descp,
            'long_descp' => $request->long_descp,

            'hot_deals' => $request->hot_deals,
            'featured' => $request->featured,
            'special_offer' => $request->special_offer,
            'special_deals' => $request->special_deals,

            'vendor_id' => $request->vendor_id,
            'status' => 1,
            'created_at' => Carbon::now(),

        ]);

        $notification = array(
            'message' => 'Product Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.product')->with($notification);
    }
    public function UpdateProductThambnail(Request $request)
    {
        $pro_id = $request->id;
        $old_image = $request->old_img;

        $image = $request->file('product_thambnail');
        $name_gen = hexdec(uniqid()) . '.' . $image->getClientOriginalExtension();
        $save_url = 'upload/products/thambnail/' . $name_gen;
        $image->move(public_path('upload/products/thambnail/'), $name_gen);

        if (file_exists($old_image)) {
            unlink($old_image);
        }

        Product::findOrFail($pro_id)->update([
            'product_thambnail' => $save_url,
            'updated_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Product Image Thambnail Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function UpdateProductMultiimage(Request $request)
    {

        $imgs = $request->multi_img;

        foreach ($imgs as $id => $img) {
            $imgDel = MultiImg::findOrFail($id);
            unlink($imgDel->photo_name);

            $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            $img->move(public_path('upload/products/multi_image/'), $make_name);
            $uploadPath = 'upload/products/multi_image/' . $make_name;

            MultiImg::where('id', $id)->update([
                'photo_name' => $uploadPath,
                'updated_at' => Carbon::now(),
            ]);
        }

        $notification = array(
            'message' => 'Product Multi Image Updated Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function MultiImageDelete($id)
    {
        $oldImg = MultiImg::findOrFail($id);
        unlink($oldImg->photo_name);

        MultiImg::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Product Multi Image Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function ProductInactive($id)
    {

        Product::findOrFail($id)->update(['status' => 0]);
        $notification = array(
            'message' => 'Product Inactivated!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
    public function ProductActive($id)
    {

        Product::findOrFail($id)->update(['status' => 1]);
        $notification = array(
            'message' => 'Product Activated!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
