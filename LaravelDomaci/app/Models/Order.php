<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $fillable = [
        'quantity'
    ];

    public function product(){
        return $this->belongsTo(Product::class);
    }
    
    public function customer(){
        return $this->belongsTo(Customer::class);
    }

    public $timestamps = false;
}