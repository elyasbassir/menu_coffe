<?php

namespace App\helper;
use App\Models\coffee_shops;
class helper
{
    static public function exist_coffee($code_coffee){
        if(coffee_shops::where('coffee_code',$code_coffee)->count() > 0){
            return true;
        }
        return false;
    }



}
