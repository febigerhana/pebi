<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\Models\UserDetail;
use App\Models\Produk;

class User extends Authenticatable
{
    protected $table = 'user';
    use HasFactory, Notifiable;

    function detail(){
    	return $this->hasOne(UserDetail::class, 'id_user');
    }

    function produk(){
    	return $this->hasMany(Produk::class , 'id_user');
    }
    function setPasswordAttribute ($value){
    	$this->attributes['password'] = bcrypt($value);
    }
    function setUsernameAttribute ($value){
    	$this->attributes['username'] = strtolower($value);
    }
}
