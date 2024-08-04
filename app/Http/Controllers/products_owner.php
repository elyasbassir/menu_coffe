<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Models\template;
use App\Models\themes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\products;
use RealRashid\SweetAlert\Facades\Alert;

class products_owner extends Controller
{



    public function add_product(Request $request)
    {
        $validation = $request->validate([
            'product_name' => 'required|max:15',
            'product_price' => 'required|int|max:9999999',
            'product_description' => 'required|max:1000',
            'main_image' => 'required|image|mimes:jpeg,png,jpg',
            'next_image' => 'image|mimes:jpeg,png,jpg',
            'video' => 'max:2048|mimes:mp4',
            'availability ' => 'bool',
        ]);
        $image_main_name = md5(uniqid().time()) . '.' . $request->main_image->getClientOriginalExtension();
        $request->main_image->move(public_path('/assets/images/products/'), $image_main_name);
        $image_names = $image_main_name;
        if (!is_null($request->next_image)) {
            $image_next_name = md5(uniqid().time()) . '.' . $request->next_image->getClientOriginalExtension();
            $request->next_image->move(public_path('/assets/images/products/'), $image_next_name);
            $image_names = $image_names .','.$image_next_name;
        }
        $video_name= Null;
        if (!is_null($request->video)) {
            $video_name = md5(uniqid().time()) . '.' . $request->video->getClientOriginalExtension();
            $request->video->move(public_path('/assets/videos/products/'), $video_name);
        }
        $new = new products();
        $new->coffee_code = Auth::user()->coffee_code;
        $new->name_product = $request->product_name;
        $new->price = $request->product_price;
        $new->image_names = $image_names;
        $new->video_name = $video_name;
        $new->description_product = $request->product_description;
        $new->availability = $request->exist_product;
        $new->save();
        Alert::success('موفق', 'محصول با موفقیت ثبت شد.');
        return redirect()->back();

    }
    public function update_setting(Request $request)
    {
        $validation = $request->validate([
            'template_id' => 'required|exists:template,template_id',
            'theme_id' => 'required|exists:themes,theme_id',
            'custom_css' => 'max:500',
        ]);
        if(!themes::where('theme_id',$request->theme_id)->where('template_id',$request->template_id)->exists()){
            Alert::error('موفق', 'تم انتخابی مربوط به این قالب نمیباشد');
            return redirect()->back();
        }
        $coffee_code = Auth::user()->coffee_code;
        setting::where('coffee_code', $coffee_code)->update([
            'template_id'=>$request->template_id,
            'theme_id'=>$request->theme_id,
            'custom_css'=>$request->custom_css,
        ]);
        Alert::success('موفق', 'تنظیمات با موفقیت ذخیره شد');
        return redirect()->back();
    }


}
