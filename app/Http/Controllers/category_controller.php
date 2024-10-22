<?php

namespace App\Http\Controllers;

use App\helper\helper;
use App\Models\category;
use App\Models\products;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use RealRashid\SweetAlert\Facades\Alert;

class category_controller extends Controller
{
    public function category_product()
    {
        helper::seo("اضافه کردن دسته بندی");
        $category_user = Auth::user()->category()->get();
        return view('dashboard.owner.category', compact('category_user'));
    }

    public function add_category(Request $request)
    {
        $validation = $request->validate([
            'name_category' => 'max:50',
            'image_category' => 'mimes:jpeg,jpg,png|max:1024'
        ]);
        $file = $request->file('image_category');
        $file_name = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path('assets/images/image_category'), $file_name);
        $add_recorde_category = new category();
        $add_recorde_category->user_id = Auth::user()->user_id;
        $add_recorde_category->category_id = md5(time() . uniqid());
        $add_recorde_category->image_category = $file_name;
        $add_recorde_category->category_name = $request->name_category;
        $add_recorde_category->save();
        Alert::success('موفق', 'دسته بندی با موفقیت اضافه شد.');
        return redirect()->back();
    }

    public function edit_category(Request $request, $category_id)
    {

        $validation = Validator::make(['category_id' => $category_id], [
            'category_id' => 'exists:category,category_id',
        ]);
        if ($validation->fails()) {
            return redirect(route('owner.category_product'))->withErrors($validation)->withInput();
        }
        $data_product = category::where('category_id', $category_id)->get();
        return view('dashboard.owner.edit_category', compact('data_product'));

    }

    public function edit_category_post(Request $request)
    {
        $validate = $request->validate([
            'name_category' => 'required|max:50|string',
            'image_category' => 'image|mimes:jpeg,png,jpg',
            'category_id' => 'exists:category,category_id',
        ]);
        $category_data = category::where('category_id',$request->category_id)->get();
        if(Auth::user()->user_id == $category_data->value('user_id')){
            Alert::success('خطا','عدم دسترسی به صفحه');
            return redirect(route('owner.category_product'));
        }
        if (!is_null($request->image_category)) {
            $file = $request->file('image_category');
            $file_name = md5(uniqid() . time()) . '.' . $request->image_category->getClientOriginalExtension();
            $file->move(public_path('assets/images/image_category'), $file_name);
            unlink(public_path('assets/images/image_category/').$category_data->value('image_category'));
            category::where('category_id',$request->category_id)->update([
                'category_name' => $request->name_category,
                'image_category' => $file_name,
            ]);
        } else {
            category::where('category_id',$request->category_id)->update([
                'category_name' => $request->name_category
            ]);
        }
        Alert::success('موفق','ویرایش دسته بندی با موفقیت');
        return redirect(route('owner.category_product'));
    }
    public function delete_category($category_id)
    {
        $validation = Validator::make(['category_id' => $category_id], [
            'category_id' => 'exists:category,category_id',
        ]);
        if ($validation->fails()) {
            return redirect(route('owner.category_product'))->withErrors($validation)->withInput();
        }
        if(products::where('category_id',$category_id)->count() > 0){
            Alert::error('خطا','برای این دسته بندی محصولی ثبت شده است');
            return redirect(route('owner.category_product'));
        }
        $category_data = category::where('category_id',$category_id)->get();
        if(Auth::user()->user_id != $category_data->value('user_id')){
            Alert::success('خطا','عدم دسترسی به صفحه');
            return redirect(route('owner.category_product'));
        }
        unlink(public_path('assets/images/image_category/').$category_data->value('image_category'));
        category::where('category_id',$category_id)->delete();
        Alert::success('موفق','حذف دسته بندی با موفقیت');
        return redirect(route('owner.category_product'));
    }

}
