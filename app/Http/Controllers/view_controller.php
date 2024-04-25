<?php

namespace App\Http\Controllers;

use App\Enums\Users_code;
use App\Models\coffee_shops;
use Illuminate\Http\Request;
use App\helper\helper;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;


class view_controller extends Controller
{
    public function main_page()
    {
        return view('main_view');
    }

    public function menu_coffee($coffee_code)
    {
        if (!helper::exist_coffee($coffee_code)) {
            return redirect()->back();
        }
        $data = coffee_shops::where('coffee_code', $coffee_code)->first()->get();
//        $product_data =
        return view('menu_shop', compact('data'));
    }

    public function register()
    {

    }

    public function login()
    {
//        Alert::error('Error Title', 'Error Message');
        if (Auth::check()) {
            $level = Auth::user()['level'];
            if ($level == Users_code::admin) {
                return redirect(route('admin.dashboard'));
            } elseif ($level == Users_code::owner) {
                return redirect(route('owner.products_owner'));
            } elseif ($level == Users_code::user) {

            }else{
                return redirect(route('main_page'));
            }
        } else {
            return view('login_register.login_form');
        }
    }

    public function dashboard()
    {
        $data_coffee = coffee_shops::join('users', 'coffee_shops.coffee_code', '=', 'users.coffee_code')->get();
        return view('dashboard.admin.dashboard', compact('data_coffee'));
    }

    public function add_owner()
    {
        return view('dashboard.admin.form_add_owner');
    }
}
