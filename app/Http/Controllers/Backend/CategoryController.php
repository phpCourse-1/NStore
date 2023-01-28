<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AllCategory()
    {
        $categories = Category::latest()->get();
        return view('backend.category.all_category', compact('categories'));
    }
    public function AddCategory()
    {
        return view('backend.category.add_category');
    }
    public function StoreCategory(Request $request)
    {

        $image = $request->file('category_image');
        $filename = date('YmdHi') . $image->getClientOriginalName();
        $save_url = 'upload/category_images/' . $filename;
        $image->move(public_path('upload/category_images'), $save_url);

        Category::insert([
            'category_name' => $request->category_name,
            'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            'category_image' => $save_url,
        ]);

        $notification = array(
            'message' => 'Category Inserted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    }
    public function EditCategory($id)
    {
        $category = Category::findOrFail($id);
        return view('backend.category.edit_category', compact('category'));
    }
    public function UpdateCategory(Request $request)
    {

        $cat_id = $request->id;
        $old_img = $request->old_image;

        if ($request->file('category_image')) {

            $image = $request->file('category_image');
            $filename = date('YmdHi') . $image->getClientOriginalName();
            $save_url = 'upload/category_images/' . $filename;
            $image->move(public_path('upload/category_images'), $save_url);

            if (file_exists($old_img)) {
                unlink($old_img);
            }

            Category::findOrFail($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
                'category_image' => $save_url,
            ]);

            $notification = array(
                'message' => 'Category Updated Successfully!',
                'alert-type' => 'success'
            );

            return redirect()->route('all.category')->with($notification);
        } else {
            Category::findOrFail($cat_id)->update([
                'category_name' => $request->category_name,
                'category_slug' => strtolower(str_replace(' ', '-', $request->category_name)),
            ]);

            $notification = array(
                'message' => 'Category Updated Successfully!',
                'alert-type' => 'success'
            );
            return redirect()->route('all.category')->with($notification);
        }
    }
    public function DeleteCategory($id)
    {

        $category = Category::findOrFail($id);
        $img = $category->category_image;
        unlink($img);

        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}
