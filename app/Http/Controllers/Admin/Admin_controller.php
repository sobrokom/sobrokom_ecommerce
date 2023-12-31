<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Hash;
use Auth;
use app\Models\Admin;
class Admin_controller extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }

    public function updateAdminPassword( Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            //check if current password enterd by admin is correct
            if(Hash::check($data['current_password'], Auth::guard('admin')->user()->password)){
                // check new password is matching with confirm password
                if($data['new_password']==$data['confirm_password']){
                    Admin::where('id', Auth::guard('admin')->user()->id)->update(['password'=>bcrypt($data['new_password'])]);
                    return redirect()->back()->with('sucess_message', ' Your password has been updated sucessfully!');
                }else{
                    return redirect()->back()->with('error_message', 'Your current password is not matched with confirm password!');
                }
            }else{
                return redirect()->back()->with('error_message', 'Your current password is incorrect!');
            }
        }     

        // echo "<pre>"; print_r(Auth::guard('admin')->user()); die;
        $adminDetails = Admin::where ('email', Auth::guard('admin')->user()->email)->first()->toArray();
        return view('admin.settings.update_admin_password')->with(compact('adminDetails'));
    }
    public function UpdateAdminDetails( Request $request)
    {
        if ($request->isMethod('post')) {
            $data = $request->all();
            // echo "<pre>"; print_r($data); die;

            $rules = [
                'admin_name'        => 'required|regex:/^[\pL\s\-]+$/u',
                'admin_mobile'      => 'required|numeric',
            ];

            $customMessage = [
                //add custom message here
                'admin_name.required'   => 'valid admin name is required',
                'admin_name.regex'      => 'valid admin name required',
                'admin_mobile.required' => 'valid number is required',
                'admin_mobile.numeric'  => 'valid number is required',

            ];

            $this->validate($request, $rules,$customMessage);

            Admin::where('id', Auth::guard('admin')->user()->id)->update(['name'=>$data['admin_name'], 'mobile'=>$data['admin_mobile']]);
            return redirect()->back()->with('sucess_message', ' Admin details updated sucessfully!');
        }    
        return view('admin.settings.update_admin_details');
    }
    public function checkAdminPassword(Request $request)
    {
        $data = $request->all();

        // echo "<pre>"; print_r($data); die;
        if(Hash::check($data['current_password'], Auth::guard('admin')->user()->password)){
            return 'true';
        }else{
            return 'false';
        }
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
