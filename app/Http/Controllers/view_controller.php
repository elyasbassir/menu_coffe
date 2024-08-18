<?php

namespace App\Http\Controllers;

use App\Enums\Users_code;
use App\Models\coffee_shops;
use App\Models\products;
use App\Models\setting;
use App\Models\themes;
use Illuminate\Http\Request;
use App\helper\helper;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\template;
use Artesaos\SEOTools\Facades\SEOTools;
use Hekmatinasser\Verta\Verta;

class view_controller extends Controller
{
    public function main_page()
    {
        helper::seo("صفحه اصلی");

        return view('main_view');
    }

    public function menu_coffee($coffee_code)
    {
        if (!helper::exist_coffee($coffee_code)) {
            return redirect()->back();
        }
        $data = coffee_shops::where('coffee_code', $coffee_code)->first()->get();
        helper::seo("منوی ".$data->value('name_coffee_shop'));
        $view_name = template::where('template_id', setting::where('coffee_code', $coffee_code)->value('template_id'))->value('template');
        $data_table_theme = themes::where('theme_id', setting::where('coffee_code', $coffee_code)->value('theme_id'))->get();
        $style = $data_table_theme->value('style_name');
        $script = $data_table_theme->value('script_name');
        $custom_css = setting::where('coffee_code', $coffee_code)->value('custom_css');
        $all_products = products::where('coffee_code',$coffee_code)->get();
        $time_expire = verta($data->value('expire_subscription'))->toCarbon()->format('j-n-Y');
        if (empty($view_name)) {
            $view_name = "coffee_farta";
        }

        if(verta()->diffDays($time_expire,false) < 0){
            abort(402,"نیاز به تمدید اشتراک");
        }
        return view('template.' . $view_name, compact('data', 'style', 'script', 'custom_css','all_products'));
    }

    public function register()
    {

    }

    public function login()
    {
//        Alert::error('Error Title', 'Error Message');
        helper::seo("ورود");
        if (Auth::check()) {
            $level = Auth::user()['level'];
            if ($level == Users_code::admin) {
                return redirect(route('admin.dashboard'));
            } elseif ($level == Users_code::owner) {
                return redirect(route('owner.manage_product_owner'));
            } elseif ($level == Users_code::user) {

            } else {
                return redirect(route('main_page'));
            }
        } else {
            return view('auth.login_form');
        }
    }

    public function dashboard()
    {
        helper::seo("داشبرد");
        $data_coffee = coffee_shops::join('users', 'coffee_shops.coffee_code', '=', 'users.coffee_code')->get();
        return view('dashboard.admin.dashboard', compact('data_coffee'));
    }

    public function add_owner()
    {
        helper::seo("اضافه کردن فروشنده");
        return view('dashboard.admin.form_add_owner');
    }


    public function new_products()
    {
        helper::seo("اضافه کردن محصول");
        return view('dashboard.owner.add_product');
    }

    public function manage_product()
    {
        helper::seo("مدیریت محصول");
        $products = products::where('coffee_code', Auth::user()->coffee_code)->get();
        return view('dashboard.owner.products', compact('products'));
    }

    public function setting()
    {
        helper::seo("تنطمیات");
        $coffee_code = Auth::user()->coffee_code;
        $templates = template::get();
        $themes = themes::get();
        $defualt_data = setting::where('coffee_code', $coffee_code)->get();
        $old_custom_css = $defualt_data->value('custom_css');
        $template_selected = $defualt_data->value('template_id');
        $theme_selected =$defualt_data->value('theme_id');
        return view('dashboard.owner.setting', compact('templates', 'themes','old_custom_css', 'template_selected', 'theme_selected'));
    }

    public function manage_template()
    {
        helper::seo("مدیریت قالب");
        $templates = template::get();
        return view('dashboard.admin.manage_template', compact('templates'));
    }

    public function manage_theme()
    {
        helper::seo("مدیریت تم");
        $themes = themes::get();
        $templates = template::get();
        return view('dashboard.admin.manage_theme',compact('themes','templates'));
    }

    public function subscription()
    {
        helper::seo("خرید اشتراک");

        return view('dashboard.owner.subscription');
    }

}
