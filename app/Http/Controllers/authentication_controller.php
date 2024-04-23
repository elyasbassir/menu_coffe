<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
Use RealRashid\SweetAlert\Facades\Alert;

class authentication_controller extends Controller
{
    public function register()
    {


    }

    public function sign_out()
    {
        if (Auth::check()) {
            Auth::logout();
        }
        return redirect(route('form_login'));
    }

    public function login(Request $request)
    {
        $validate = $request->validate([
            'phone' => 'required',
            'password' => 'required'
        ]);
        $remember = false;
        if($request->remember==true){
            $remember = true;
        }
        if (Auth::attempt(['phone' => $request->phone, 'password' => $request->password], $remember)) {
            Alert::success('موفق', 'شما با موفقیت وارد حساب کاربری خود شدید.');
            return redirect(route('form_login'));
        } else {
            Alert::error('خطا', 'اطلاعات کاربری اشتباه است.');
            return redirect(route('form_login'));
        }

    }
}
