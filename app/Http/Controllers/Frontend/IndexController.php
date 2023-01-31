<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\MultiImg;
use App\Models\Product;
use App\Models\SubCategory;
use App\Models\User;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function Index()
    {
        $hot_deals = Product::where('hot_deals', 1)->where('discount_price', '!=', NULL)->orderBy('id', 'DESC')->limit(3)->get();

        $special_offer = Product::where('special_offer', 1)->orderBy('id', 'DESC')->limit(3)->get();

        $new = Product::where('status', 1)->orderBy('id', 'DESC')->limit(3)->get();

        $special_deals = Product::where('special_deals', 1)->orderBy('id', 'DESC')->limit(3)->get();

        return view('frontend.index', compact('hot_deals', 'special_offer', 'new', 'special_deals'));
    }

    public function ProductDetails($id, $slug)
    {
        $product = Product::findOrFail($id);

        $color = $product->product_color;
        $product_color = explode(',', $color);

        $size = $product->product_size;
        $product_size = explode(',', $size);

        $multiImage = MultiImg::where('product_id', $id)->get();

        $cat_id = $product->category_id;
        $relatedProduct = Product::where('category_id', $cat_id)->where('id', '!=', $id)->orderBy('id', 'DESC')->limit(4)->get();

        return view('frontend.product.product_details', compact('product', 'product_color', 'product_size', 'multiImage', 'relatedProduct'));
    }

    public function VendorDetails($id)
    {
        $vendor = User::findOrFail($id);
        $vproduct = Product::where('vendor_id', $id)->get();
        return view('frontend.vendor.vendor_details', compact('vendor', 'vproduct'));
    }

    public function VendorAll()
    {
        $vendors = User::where('status', 'active')->where('role', 'vendor')->orderBy('id', 'DESC')->get();
        return view('frontend.vendor.all_vendor', compact('vendors'));
    }
    public function CatWiseProduct(Request $request, $id, $slug)
    {
        $products = Product::where('status', 1)->where('category_id', $id)->orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $breadcat = Category::where('id', $id)->first();
        $newProduct = Product::orderBy('id', 'DESC')->limit(3)->get();

        return view('frontend.product.category_view', compact('products', 'categories', 'breadcat', 'newProduct'));
    }
    public function SubCatWiseProduct(Request $request, $id, $slug)
    {
        $products = Product::where('status', 1)->where('subcategory_id', $id)->orderBy('id', 'DESC')->get();
        $categories = Category::orderBy('category_name', 'ASC')->get();
        $breadsubcat = SubCategory::where('id', $id)->first();
        $newProduct = Product::orderBy('id', 'DESC')->limit(3)->get();
        return view('frontend.product.subcategory_view', compact('products', 'categories', 'breadsubcat', 'newProduct'));
    }
}
