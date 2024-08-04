<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    use HasFactory;
    protected $table = "template";
    public $timestamps = true;
    protected $fillable = [
        'template_id',
        'template_name',
        'template'
    ];
}
