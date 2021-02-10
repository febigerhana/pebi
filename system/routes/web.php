<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homecontroller;
use App\Http\Controllers\authcontroller;
use App\Http\Controllers\produkcontroller;
use App\Http\Controllers\produkadmincontroller;
use App\Http\Controllers\clientcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\kategoricontroller;
use App\Http\Controllers\kategoriadmincontroller;
use App\Http\Controllers\settingcontroller;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', function () {
	return view('login_adm');
});
Route::prefix('pembeli')->group(function(){
Route::get('home', [clientcontroller::class, 'home']);
Route::post('home/filter', [clientcontroller::class, 'filter']);

Route::get('kategori/{kategori}', [clientcontroller::class, 'kategori']);

Route::get('product/{produk}', [clientcontroller::class, 'show']);
Route::get('checkout/{produk}', [clientcontroller::class, 'checkout']);
});



Route::prefix('admin')->group(function(){
	//beranda
	Route::get('beranda', [homecontroller::class, 'showBeranda']);
	//kategori
	Route::resource('kategori', kategoriadmincontroller::class);
	//produk
	Route::resource('produk', produkadmincontroller::class);
	Route::post('produk/filter', [produkadmincontroller::class, 'filter']);
	//user 
	Route::resource('user', usercontroller::class);
});

Route::prefix('penjual')->group(function(){
	//beranda
	Route::get('beranda', [homecontroller::class, 'showBerandaPenjual']);
	//kategori
	Route::resource('kategori', kategoricontroller::class);
	//produk
	Route::resource('produk', produkcontroller::class);
	Route::post('produk/filter', [produkcontroller::class, 'filter']);

});

	Route::get('setting', [settingcontroller::class, 'index']);
	Route::post('setting', [settingcontroller::class, 'store']);



Route::get('/adm_promo', [homecontroller::class, 'showAdm_promo']);


//Login_admin

Route::get('/login_adm', [authcontroller::class, 'showLogin'])->name('login');

Route::post('/login_adm', [authcontroller::class, 'LoginProcess']);

// Register Admin Master
Route::get('/register_adm', [authcontroller::class, 'create']);
Route::post('/register_adm', [authcontroller::class, 'Register']);
// end

// Register Penjual
Route::get('/register_penjual', [authcontroller::class, 'createPenjual']);
Route::post('/register_penjual', [authcontroller::class, 'RegisterPenjual']);
// end

// Register Pembeli
Route::get('/register_pembeli', [authcontroller::class, 'createPembeli']);
Route::post('/register_pembeli', [authcontroller::class, 'RegisterPembeli']);
// end

Route::get('/logout_adm', [authcontroller::class, 'destory']);

Route::get('/masteradmin', function () 
{
	return view('masteradmin');
});