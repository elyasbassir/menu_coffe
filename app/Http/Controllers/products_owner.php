<?php

namespace App\Http\Controllers;

use App\Models\category;
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
            'category_id' => 'required|string|exists:category,category_id',
            'product_name' => 'required|max:15',
            'product_price' => 'required|int|max:9999999',
            'product_description' => 'required|max:1000',
            'main_image' => 'required|image|mimes:jpeg,png,jpg',
            'next_image' => 'image|mimes:jpeg,png,jpg',
            'video' => 'max:2048|mimes:mp4',
            'availability ' => 'bool',
        ]);
        if (Auth::user()->user_id != category::where('category_id', $request->category_id)->get('user_id')->value('user_id')) {
            Alert::error('خطا', 'عملیات غیر ممکن');
            return redirect()->back();
        }
        $image_main_name = md5(uniqid() . time()) . '.' . $request->main_image->getClientOriginalExtension();
        $request->main_image->move(public_path('/assets/images/products/'), $image_main_name);
        $image_names = $image_main_name;
        if (!is_null($request->next_image)) {
            $image_next_name = md5(uniqid() . time()) . '.' . $request->next_image->getClientOriginalExtension();
            $request->next_image->move(public_path('/assets/images/products/'), $image_next_name);
            $image_names = $image_names . ',' . $image_next_name;
        }
        $video_name = Null;
        if (!is_null($request->video)) {
            $video_name = md5(uniqid() . time()) . '.' . $request->video->getClientOriginalExtension();
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
        $new->category_id = $request->category_id;
        $new->product_id = md5(uniqid() . time());
        $new->save();
        Alert::success('موفق', 'محصول با موفقیت ثبت شد.');
        return redirect()->back();

    }

    public function edit_product(Request $request)
    {
        $validation = $request->validate([
            'product_id' => 'string|exists:products,product_id',
            'category_id' => 'required|string|exists:category,category_id',
            'product_name' => 'required|max:15',
            'product_price' => 'required|int|max:9999999',
            'product_description' => 'required|max:1000',
            'main_image' => 'image|mimes:jpeg,png,jpg',
            'next_image' => 'image|mimes:jpeg,png,jpg',
            'video' => 'max:2048|mimes:mp4',
            'availability ' => 'bool',
        ]);
        if(category::where('category_id',$request->category_id)->get('user_id')->value('user_id') != Auth::user()->user_id ){
            Alert::error('خطا', 'خطای دسترسی');
            return redirect()->route('owner.manage_product_owner');
        }
        $product = products::where('product_id', $request->product_id)->get();
        $result_image_name = "";
        $images_name_database = $product->value('image_names');
        $video_name_database = $product->value('video_name');
        $new_video_name = "";
        $name_image_main = "";
        $name_image_next = "";
        $list_image = explode(',', $images_name_database);
                if (is_null($request->main_image)) {
                    $result_image_name = $list_image[0];
                } else {
                    $name_image_main = md5(uniqid() . time()) . '.' . $request->main_image->getClientOriginalExtension();
                    $result_image_name = $name_image_main;
                    $request->main_image->move(public_path('/assets/images/products/'), $name_image_main);
                    if (file_exists(public_path('/assets/images/products/') . $list_image[0]) && !is_null($list_image[0])) {
                        unlink(public_path('/assets/images/products/') . $list_image[0]);
                    }
                }


                if (is_null($request->next_image) && count($list_image)==2) {
                    $result_image_name = $result_image_name . ',' . $list_image[1];
                } elseif(!is_null($request->next_image) ) {
                    $next_image_name =md5(uniqid() . time()) . '.' . $request->next_image->getClientOriginalExtension();
                    $name_image_next = $result_image_name . ',' . $next_image_name;
                    $result_image_name = $result_image_name.','.$next_image_name;
                    $request->next_image->move(public_path('/assets/images/products/'), $next_image_name);
                    if (isset($list_image[1]) && file_exists(public_path('/assets/images/products/') . $list_image[1])) {
                        unlink(public_path('/assets/images/products/') . $list_image[1]);
                    }
                }
        if(!is_null($request->video)){
            $new_video_name = md5(uniqid() . time()) . '.' . $request->video->getClientOriginalExtension();
            $request->video->move(public_path('/assets/videos/products/'), $new_video_name);
            if (file_exists(public_path('/assets/videos/products/') . $product->value('video_name'))) {
                unlink(public_path('/assets/videos/products/') . $product->value('video_name'));
            }
        }else{
            $new_video_name == $video_name_database;
        }

        products::where('product_id', $request->product_id)->update([
            'category_id'=>$request->category_id,
            'name_product'=>$request->product_name,
            'price'=>$request->product_price,
            'description_product'=>$request->product_description,
            'availability'=>$request->availability,
            'video_name'=>$new_video_name,
            'image_names'=>$result_image_name,
        ]);
        return redirect()->route('owner.manage_product_owner');
    }

    //////////delete product owner
    public function delete_product_owner(Request $request)
    {
        $validate = $request->validate([
            'product_id' => 'required|exists:products,product_id|max:255',
        ]);
        $product_owner = products::where('product_id', $request->product_id)->first()->user()->get('user_id')->value('user_id');
        $owner_id = Auth::user()->user_id;
        if ($product_owner != $owner_id) {
            Alert::error('خطا', 'این محصول مربوط به مدیر دیگه ای میباشد');
            return redirect()->back();
        }
        $product = products::where('product_id', $request->product_id)->get(['image_names', 'video_name']);

        if (file_exists(public_path('/assets/videos/products/') . $product->value('video_name')) && !is_null($product->value('video_name'))) {
            unlink(public_path('/assets/videos/products/') . $product->value('video_name'));
        }
        foreach (explode(',', $product->value('image_names')) as $key => $image_name) {
            if (file_exists(public_path('/assets/images/products/') . $image_name) && !is_null($image_name)) {
                unlink(public_path('/assets/images/products/') . $image_name);
            }
        }
        products::where('product_id', $request->product_id)->delete();
        Alert::success('موفق', 'محصول حذف شد');
        return redirect()->back();
    }


    public function update_setting(Request $request)
    {
        $validation = $request->validate([
            'template_id' => 'required|exists:template,template_id',
            'theme_id' => 'required|exists:themes,theme_id',
            'custom_css' => 'max:500',
        ]);
        if (!themes::where('theme_id', $request->theme_id)->where('template_id', $request->template_id)->exists()) {
            Alert::error('موفق', 'تم انتخابی مربوط به این قالب نمیباشد');
            return redirect()->back();
        }
        $coffee_code = Auth::user()->coffee_code;
        setting::where('coffee_code', $coffee_code)->update([
            'template_id' => $request->template_id,
            'theme_id' => $request->theme_id,
            'custom_css' => $request->custom_css,
        ]);
        Alert::success('موفق', 'تنظیمات با موفقیت ذخیره شد');
        return redirect()->back();
    }


}
