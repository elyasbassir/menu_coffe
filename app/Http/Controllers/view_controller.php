<?php

namespace App\Http\Controllers;

use App\Models\coffee_shops;
use Illuminate\Http\Request;
use App\helper\helper;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
Use RealRashid\SweetAlert\Facades\Alert;


class view_controller extends Controller
{
    public function main_page()
    {
        return view('main_view');
    }

    public function menu_coffee($code_coffee)
    {
        if (!helper::exist_coffee($code_coffee)) {
            return redirect()->back();
        }
        return view('menu_shop');
    }

    public function register()
    {

    }

    public function login()
    {
//        Alert::error('Error Title', 'Error Message');
        if(Auth::check()){
            return redirect(route('dashboard'));
        }
        return view('login_register.login_form');
    }
    public function dashboard(){
        $data_coffee = coffee_shops::join('users','coffee_shops.coffee_code','=','users.coffee_code')->get();
        return view('dashboard.admin.dashboard',compact('data_coffee'));
    }
    public function add_owner(){
        return view('dashboard.admin.form_add_owner');
    }
}
