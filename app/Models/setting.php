<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class setting extends Model
{
    use HasFactory;
    protected $table = "setting";
    protected $fillable = [
        'coffee_code',
        'template_id',
        'theme_id',
        'custom_css',
    ];
    public $timestamps = true;
}
