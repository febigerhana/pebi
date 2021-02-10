<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Desa;
use App\Models\Kabupaten;

class Kecamatan extends Model{
	protected $table = 'kecamatan';

	function desa(){
		return $this->hasMany(Desa::class, 'id_desa');
	}

	function kabupaten(){
		return $this->belongsTo(Kabupaten::class, 'id_kabupaten');
	}
}