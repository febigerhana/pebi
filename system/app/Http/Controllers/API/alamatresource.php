<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Provinsi;
use App\Models\Kabupaten;
use App\Models\Kecamatan;

class alamatresource extends Controller
{
    function getKabupaten($id_provinsi){
        return Kabupaten::where("id_provinsi", $id_provinsi)->get()->toJson();
    }
    function getKecamatan($id_provinsi){
        return Kecamatan::where("id_kabupaten", $id_kabupaten)->get()->toJson();
    }
}
