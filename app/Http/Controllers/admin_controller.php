<?php

namespace App\Http\Controllers;

use App\Enums\Users_code;
use App\Models\coffee_shops;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;

class admin_controller extends Controller
{
    public function new_owner(Request $request){
        $validation = $request->validate([
        'name'=>'required|max:255',
        'last_name'=>'required|max:255',
        'phone'=>'required|digits:11|regex:/^09[0-9]{9}$/|unique:users,phone',
        'coffee_name'=>'required|max:255',
        'password'=>'required|max:255',
        'address_coffee'=>'required|max:255',
        ]);
        $code = md5(sha1(time().$request->coffee_name));
        $new_coffee = new coffee_shops();
        $new_coffee->coffee_code = $code;
        $new_coffee->name_coffee_shop = $request->coffee_name;
        $new_coffee->address_coffee_shop =$request->address_coffee;
        $new_coffee->save();

        $new_user = new User();
        $new_user->name =$request->name;
        $new_user->last_name = $request->last_name;
        $new_user->user_id = md5(sha1("MENU_".time().$request->phone));
        $new_user->coffee_code = $code;
        $new_user->password = Hash::make($request->password);
        $new_user->phone = $request->phone;
        $new_user->level = Users_code::owner;
        $new_user->save();
        Alert::success('موفق', 'کاربر با موفقیت ثبت شد.');
        return redirect()->back();
    }
}
