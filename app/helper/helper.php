<?php

namespace App\helper;
use App\Models\coffee_shops;
use Artesaos\SEOTools\Facades\SEOTools;

class helper
{
    static public function exist_coffee($code_coffee){
        if(coffee_shops::where('coffee_code',$code_coffee)->count() > 0){
            return true;
        }
        return false;
    }

   static public function seo($title)
    {
        SEOTools::setTitle("$title - منو شاپ");
        SEOTools::setDescription('منوی انلاین برای فروشگاه ها');
        SEOTools::opengraph()->setUrl('https://menu-shop.ir');
        SEOTools::setCanonical('https://menu-shop.ir');
        SEOTools::twitter()->setSite('@menu_shop');
        SEOTools::jsonLd()->addImage('logo.jpg');
    }

}
