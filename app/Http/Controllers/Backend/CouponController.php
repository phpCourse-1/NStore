<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CouponController extends Controller
{
    public function AllCoupon()
    {
        $coupon = Coupon::latest()->get();
        return view('backend.coupon.all_coupon', compact('coupon'));
    }
    public function AddCoupon()
    {
        return view('backend.coupon.add_coupon');
    }
    public function StoreCoupon(Request $request)
    {
        Coupon::insert([
            'coupon_name' => $request->coupon_name,
            'coupon_discount' => $request->coupon_discount,
            'coupon_validity' => $request->coupon_validity,
            'created_at' => Carbon::now(),
        ]);

        $notification = array(
            'message' => 'Coupon Inserted Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('all.coupon')->with($notification);
    }

}
