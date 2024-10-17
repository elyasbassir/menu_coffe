<?php

namespace App\Http\Controllers;

use App\helper\helper;
use App\Models\category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class category_controller extends Controller
{
    public function category_product()
    {
        helper::seo("اضافه کردن محصول");
        $category_user = Auth::user()->category()->get();
        return view('dashboard.owner.category',compact('category_user'));
    }
    public function add_category(Request $request){
        $validation = $request->validate([
            'name_category'=>'max:50',
            'image_category'=>'mimes:jpeg,jpg,png|max:1024'
        ]);
        $file = $request->file('image_category');
        $file_name = uniqid().'.'.$file->getClientOriginalExtension();
        $file->move(public_path('assets/images/image_category'),$file_name);
        $add_recorde_category = new category();
        $add_recorde_category->user_id = Auth::user()->user_id;
        $add_recorde_category->category_id = md5(time().uniqid());
        $add_recorde_category->image_category = $file_name;
        $add_recorde_category->category_name = $request->name_category;
        $add_recorde_category->save();
        Alert::success('موفق', 'دسته بندی با موفقیت اضافه شد.');
        return redirect()->back();
    }
}
