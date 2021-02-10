<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Produk;

class kategoricontroller extends Controller{
	
	function index(){
		$data['list_kategori'] = Kategori::withCount('produk')->get();
		return view('Penjual.Kategori.index', $data);
	}

	function create(){
		return view('Penjual.Kategori.create');

	}

	function store(){
		$kategori = new kategori;
		$kategori-> nama = request('nama');
		$kategori-> save();

		return redirect ('penjual/kategori')-> with ('success', 'Data berhasil ditambahkan');

	}

	function show(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('Penjual.Kategori.show', $data);

	}

	function edit(Kategori $kategori){
		$data['kategori'] = $produk;
		return view('Penjual.Kategori.edit', $data);
	}

	function update(Kategori $kategori){
		$kategori-> nama = request('nama');
		$kategori-> save();

		return redirect ('penjual/kategori')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(Kategori $kategori){
		$kategori->delete();

		return redirect ('penjual/kategori')-> with ('danger', 'Data berhasil dihapus');
	}

}