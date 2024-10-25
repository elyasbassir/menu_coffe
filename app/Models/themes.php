<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class themes extends Model
{
    use HasFactory;
    protected $table = "themes";
    protected $fillable = [
        'theme_name',
        'template_id',
        'style_name',
        'script_name',
        'theme_id',
    ];
    public $timestamps = true;
}
