<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Model;
use Laravel\Sanctum\HasApiTokens;
class Form_Model extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    protected $table='laravel_form';
    protected $fillable= [

        'id',
        'name',
        'city',
        'phone',
        'status'
    ];
}
