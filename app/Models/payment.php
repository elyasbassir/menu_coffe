<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class payment extends Model
{
    use HasFactory;
    protected $table = "payment";
    public $timestamps = false;
    protected $fillable = [
        'payment_id',
        'user_id',
        'price',
        'payed',
        'time',
        'referenceId'
    ];
}
