<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\produkresource;
use App\Http\Controllers\API\alamatresource;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::resource('produk', produkresource::class);

Route::get('provinsi/{id}', [alamatresource::class, 'getKabupaten']);
Route::get('kabupaten/{id}', [alamatresource::class, 'getKecamatan']);
