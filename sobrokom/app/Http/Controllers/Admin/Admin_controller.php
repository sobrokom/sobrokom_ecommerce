<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;

class Admin_controller extends Controller
{
    public function updateAdminPassword()
    {
        echo "<pre>"; print_r(Auth::guard('admin')->user()); die;

        $adminDetails = Admin::where ('email', Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.settings.update_admin_password')->with(compact('adminDetails'));
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function login(Request $request)
    {
        // echo $password = Hash::make('123456');die;
        if($request->isMethod('post')){
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $rules = [
                'email' => 'required|email|max:255',
                'password' => 'required',
            ];

            $customMessage = [
                //add custom message here
                'email.required' => 'email is required',
                'email.email' => 'valid email Address is required',
                'password.required' => 'password is required',

            ];

            $this->validate($request,$rules,$customMessage);

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'], 'status'=>1])){
                return redirect('admin/dashboard');
            }else{
                return redirect()->back()->with('error_message', 'Invalid email and password');
            }
        }
        return view('admin.login');
    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('admin/login');
    }
}
