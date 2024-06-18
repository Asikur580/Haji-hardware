<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['firstName','lastName','email','mobile','password','otp'];

    protected $hidden = ['created_at','updated_at','otp'];
    protected $attributes = [
        'otp' => ''
    ];
}
