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

    public function delete_theme(Request $request)
    {
        $validate = $request->validate([
            'theme_id' => 'required|string|exists:themes,theme_id',
        ]);
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
