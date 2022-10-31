<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Form_Model extends Model
{
    use HasFactory;
    protected $table='laravel_form';
    protected $fillabel = [

        'id',
        'name',
        'city',
        'phone',
    ];
}
