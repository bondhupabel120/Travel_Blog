<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Auth;
use Hash;

class AdminController extends Controller
{
    /*Login Part*/
    public function index(){
        $title = 'Admin Login';
        if(Auth::guard('admin')->check()){
            return redirect()->route('admin.home');
        }
        return view('backend.admin.login', compact('title'));
    }

    public function loginCheck(Request $request){
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if(Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ])){
            return redirect()->route('admin.home');
        }

        return back()->withErrors('The Combination of Username or Password is Wrong!.');
    }

    public function dashboard(){
        $title = 'Admin Dashboard';
        return view('backend.home.home', compact('title'));
    }
    public function adminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    //Change Password
    public function adminChangePassword(){
        return view('backend.admin.change-password');
    }
    public function saveChangePassword(Request $request){
        $this->validate($request,[
            'current_password' => 'required',
            'password' => 'required',
            'confirm_password' => 'required',
        ]);
        $ok = Admin::find($request->id);
        $password = $request->input('current_password');
        $check = Admin::where('id', Auth::user()->id)->first();
        if(Hash::check($password, $check->password)) {
            if ($request->password == $request->confirm_password){
                $ok->password = bcrypt($request->password);
                $ok->save();
                return back()->withSuccess('Password Change Successful');
            }
            return back()->withErrors('New Password & Confirm Password Not Match!');
        } else {
            return back()->withErrors('Current Password Not Match');
        }
    }

    /*Register Part*/
    public function adminRegister(){
        $title = 'Admin Register';
        return view('backend.admin.register', compact('title'));
    }
    public function saveRegister(Request $request){
        $this->validate($request,[
            'email' => 'required|unique:admins',
            'password' => 'required',
        ]);
        Admin::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
        if(Auth::guard('admin')->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]))
            return redirect()->route('admin.home');
    }
}
