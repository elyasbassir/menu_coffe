<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class coffee_shops extends Model
{
    use HasFactory;
    protected $fillable = [
        'coffee_code',
        'name_coffee_shop',
        'address_coffee_shop',
    ];
    public $timestamps = true;
    public function user(){
        return $this->hasOne(User::class,'coffee_code','coffee_code');
    }
    public function setting()
    {
        return $this->hasOne(setting::class,'coffee_code','coffee_code');
    }

    public function products(){
        return $this->hasMany(products::class,'coffee_code','coffee_code');
    }
}
