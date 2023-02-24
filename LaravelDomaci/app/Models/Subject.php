<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'acronym',
        'ESPB',
        'type'
    ];

    public function evaluation(){
        return $this->hasMany(Evaluation::class);
    }
}
