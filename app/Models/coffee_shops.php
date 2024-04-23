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
}
