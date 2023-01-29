<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class VendorController extends Controller
{
    public function VendorDashboard()
    {
        return view('vendor.index');
    }
    public function VendorLogin()
    {
        return view('vendor.login.index');
    }
    public function VendorDestroy(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/vendor/login');
    }
    public function VendorProfile()
    {
        $id = Auth::user()->id;
        $vendorData = User::find($id);
        return view('vendor.profile.index', compact('vendorData'));
    }
    public function VendorProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->vendor_join = $request->vendor_join;
        $data->vendor_short_info = $request->vendor_short_info;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/vendor_images/' . $data->photo));
            $filename = date('YmdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/vendor_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();
        $notification = array(
            'message' => "Vendor Profile Updated Successfully!",
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
    public function VendorChangePassword()
    {
        return view('vendor.profile.change_password');
    }
    public function VendorUpdatePassword(Request $request)
    {
        // Validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed',
        ]);

        // Match The Old Password
        $hashedPassword = Auth::user()->password;
        if (!Hash::check($request->old_password, $hashedPassword)) {
            return back()->with("error", "Old Password is incorrect. Try again!");
        }

        // Update The new password
        $id = Auth::user()->id;
        User::whereId($id)->update([
            'password' => Hash::make($request->new_password)

        ]);
        return back()->with("status", "Password Changed Successfully!");
    }
    public function BecomeVendor()
    {
        return view('auth.become_vendor');
    }
    public function VendorRegister(Request $request)
    {

        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::insert([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'vendor_join' => $request->vendor_join,
            'password' => Hash::make($request->password),
            'role' => 'vendor',
            'status' => 'inactive',
        ]);

        $notification = array(
            'message' => 'Vendor Registered Successfully!',
            'alert-type' => 'success'
        );

        return redirect()->route('vendor.login')->with($notification);
    }
}
