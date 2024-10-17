<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;


    public $table = 'category';
    protected $fillable =[
        'user_id',
        'category_id',
        'image_category',
        'category_name',
    ];

    public function user(){
        return $this->hasOne(User::class,'user_id','user_id');
    }
}
