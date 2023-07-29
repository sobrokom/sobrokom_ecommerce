<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
class Admin_controller extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function login(Request $request)
    {
        // echo $password = Hash::make('123456');die;
        if($request->isMethod('post')){
            $data = $request->all();
            echo "<pre>"; print_r($data); die;

            if(Auth::guard('admin')->attempt(['email'=>$data['email'], 'password'=>$data['password'], 'status'=>1])){
                return redirect('admin/dashboard');
            }else{
                return redirect()->back()->with('error_message', 'invalid email and password');
            }
        }
        return view('admin.login');
    }
}
