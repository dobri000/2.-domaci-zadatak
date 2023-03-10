<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = [
        'firstname',
        'lastname',
        'brith',
        'yearOfStudying',
        'email',
        'gender',
        'address'
    ];

    public function evaluation(){
        return $this->hasMany(Evaluation::class);
    }
}
