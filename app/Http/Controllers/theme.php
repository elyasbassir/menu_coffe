<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Models\themes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use RealRashid\SweetAlert\Facades\Alert;

class theme extends Controller
{

    public function add_theme(Request $request){
        $request->validate([
            'theme_name' => 'required|unique:themes,theme_name|max:255',
            'template_id' => 'required|exists:template,template_id|max:500',
            'css_file' => 'required|file',
            'js_file' => 'required|file',
        ]);
        $name_js_file = md5(uniqid() . time());
        $js_file = public_path('assets/themes/js/' . $name_js_file . '.js');
        $content = $request->file('js_file')->getContent();
        if (!File::exists(dirname($js_file))) {
            File::makeDirectory(dirname($js_file), 0755, true);
        }
        File::put($js_file, $content);


        $name_css_file = md5(uniqid() . time());
        $css_file = public_path('assets/themes/css/' . $name_css_file . '.css');
        $content = $request->file('css_file')->getContent();
        if (!File::exists(dirname($css_file))) {
            File::makeDirectory(dirname($css_file), 0755, true);
        }
        File::put($css_file, $content);

        $add_theme = new themes();
        $add_theme->theme_name = $request->theme_name;
        $add_theme->template_id = $request->template_id;
        $add_theme->style_name = $name_css_file.'.css';
        $add_theme->script_name = $name_js_file.'.js';
        $add_theme->theme_id = md5(uniqid().time());
        $add_theme->save();

        Alert::success("تم جدید با موفقیت ایجاد شد");
        return redirect()->back();
    }
    public function delete_theme(Request $request)
    {
        $validate = $request->validate([
            'theme_id' => 'required|string|exists:themes,theme_id',
        ]);
        if($request->theme_id == env('THEME_ID_DEFAULT')){
            Alert::error("شما اجازه پاک کردن تم اصلی رو ندارید.");
            return redirect()->back();
        }
        $recorde_theme = themes::where('theme_id', $request->theme_id)->get();
        unlink(public_path('assets/themes/css/' . $recorde_theme->value('style_name') ));
        unlink(public_path('assets/themes/js/' . $recorde_theme->value('script_name') ));
        setting::where('theme_id', $request->theme_id)->update([
            'template_id' => env('TEMPLATE_ID_DEFAULT'),
            'theme_id' => env('THEME_ID_DEFAULT')
        ]);
        themes::where('theme_id', $request->theme_id)->delete();
        Alert::success("تم با موفقیت حذف شد مشتریانی که از این تم استفاده میکردند بازنشانی شدند به تم پیش فرض.");
        return redirect()->back();

    }
}
