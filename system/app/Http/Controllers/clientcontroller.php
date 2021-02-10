<?php

namespace App\Http\Controllers;
use App\Models\Produk;
use App\Models\Kategori;
use App\Models\Provinsi;
use App\Models\Kabupaten;

class clientcontroller extends Controller
{
	function home(){
		$data['list_produk'] = Produk::paginate(12);
		$data['list_kategori'] = Kategori::all();
		return view('home', $data);
	}

	function show(Produk $produk){
		$data['produk'] = $produk;
		$data['list_kategori'] = Kategori::all();
		return view('product', $data);
	}

	function checkout(Produk $produk){
		$data['produk'] = $produk;
		$data['list_provinsi'] = Provinsi::all();
		$data['list_kategori'] = Kategori::all();
		return view('checkout', $data);
	}

	function filter(){
		$kategori = request ('id_kategori');
		$data['id_kategori'] = $kategori;
		$data['list_kategori'] = Kategori::all();
		$data['harga_min'] = $harga_min = request('harga_min');
		$data['harga_max'] = $harga_max = request('harga_max');
		$data['list_produk'] = Produk::where('id_kategori', "$kategori")->paginate(12);
		return view('home', $data);
	}
	function destory(){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('penjual')->logout();
		return view('login_adm');

	}

}