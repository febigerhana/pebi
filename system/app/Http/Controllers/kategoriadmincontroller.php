<?php

namespace App\Http\Controllers;
use App\Models\Kategori;
use App\Models\Produk;

class kategoriadmincontroller extends Controller{
	
	function index(){
		$data['list_kategori'] = Kategori::withCount('produk')->get();
		return view('Admin.Kategori.index', $data);
	}

	function create(){
		return view('Admin.Kategori.create');

	}

	function store(){
		$kategori = new kategori;
		$kategori-> nama = request('nama');
		$kategori-> save();

		return redirect ('admin/kategori')-> with ('success', 'Data berhasil ditambahkan');

	}

	function show(Kategori $kategori){
		$data['kategori'] = $kategori;
		return view('Admin.Kategori.show', $data);

	}

	function edit(Kategori $kategori){
		$data['kategori'] = $produk;
		return view('Admin.Kategori.edit', $data);
	}

	function update(Kategori $kategori){
		$kategori-> nama = request('nama');
		$kategori-> save();

		return redirect ('admin/kategori')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(Kategori $kategori){
		$kategori->delete();

		return redirect ('admin/kategori')-> with ('danger', 'Data berhasil dihapus');
	}

}