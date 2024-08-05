<?php

namespace App\Http\Controllers;

use App\Models\setting;
use App\Models\themes;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Artisan;
use RealRashid\SweetAlert\Facades\Alert;
use App\Models\template as templates;

class template extends Controller
{
    public function add_template(Request $request)
    {
        $request->validate([
            'name_template' => 'required|unique:template,template_name',
            'content' => 'required|mimes:html',
        ]);
        $template = md5(uniqid() . time());
        $viewPath = resource_path('views/template/' . $template . '.blade.php');
        $content = $request->file('content')->getContent();
        if (!File::exists(dirname($viewPath))) {
            File::makeDirectory(dirname($viewPath), 0755, true);
        }
        File::put($viewPath, $content);


        $add_template = new templates();
        $add_template->template_id = md5(uniqid() . time());
        $add_template->template_name = $request->name_template;
        $add_template->template = $template;
        $add_template->save();

        Alert::success('موفق', 'قالب با موفقیت ایجاد شد');
        return redirect()->back();
    }


    public function delete_template(Request $request)
    {
        $validate = $request->validate([
            'template_id' => 'required|string|exists:template,template_id',
        ]);
        if($request->template_id == env('TEMPLATE_ID_DEFAULT')){
            Alert::error("شما اجازه پاک کردن قالب اصلی رو ندارید.");
            return redirect()->back();
        }
        $recorde_template = templates::where('template_id', $request->template_id)->get();
        unlink(resource_path('views/template/' . $recorde_template->value('template') . '.blade.php'));

        $recorde_theme = themes::where('template_id', $request->template_id)->get();
        foreach ($recorde_theme as $key => $value) {
            unlink(public_path('assets/themes/css/' . $recorde_theme->value('style_name')));
            unlink(public_path('assets/themes/js/' . $recorde_theme->value('script_name')));
            setting::where('template_id', $request->template_id)->update([
                'template_id' => env('TEMPLATE_ID_DEFAULT'),
                'theme_id' => env('THEME_ID_DEFAULT')
            ]);
            themes::where('template_id', $request->template_id)->delete();
        }

        templates::where('template_id', $request->template_id)->delete();

        Alert::success("قالب با موفقیت حذف شد مشتریانی که از این قالب استفاده میکردند بازنشانی شدند به قالب پیش فرض.");
        return redirect()->back();

    }

}
