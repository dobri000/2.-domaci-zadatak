<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $filable = [
        'product_name',
        'price'
    ];

    public function orders(){
        return $this->hasMany(Order::class);
    }

    public $timestamps = false;
}
