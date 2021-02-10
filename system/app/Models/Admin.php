<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\Produk;

class Admin extends Authenticatable
{
    protected $table = 'admin';
    use HasFactory, Notifiable;

    function setPasswordAttribute ($value){
    	$this->attributes['password'] = bcrypt($value);
    }
    function setUsernameAttribute ($value){
    	$this->attributes['username'] = strtolower($value);
    }
}
