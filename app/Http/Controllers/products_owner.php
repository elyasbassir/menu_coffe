<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class products_owner extends Controller
{
    public function products(){

        return view('dashboard.owner.products');
    }
    public function manage_product(){
        dd(123);
    }
}
