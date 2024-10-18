<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    use HasFactory;
    protected $table = "products";
    protected $fillable = [
        'name_product',
        'coffee_code',
        'price',
        'image_names',
        'video_name',
        'description_product',
        'availability',
        'category_id',
        'product_id'
    ];
    public $timestamps = true;
public function user()
{
    return $this->hasOne(User::class,'coffee_code','coffee_code');
}


}
