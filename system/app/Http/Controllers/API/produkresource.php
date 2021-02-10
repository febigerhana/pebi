<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Produk;

class produkresource extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Produk::all();
    }

    public function store()
    {
        if(request('nama') && request('harga') && request('stok') && request('berat') && request('deskripsi')){
            $produk = new Produk;
            $produk->nama = request('nama');
            $produk->harga = request('harga');
            $produk->stok = request('stok');
            $produk->berat = request('berat');
            $produk->deskripsi = request('deskripsi');
            $produk->save();

            return collect([
                'respon' => 69,
                'data' => $produk
            ]);
        } else{
            return collect([
                'respon' => 500,
                'massage' => "Ada field yang kosong"
            ]);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        if($produk){
            return collect([
                'status' => 69,
                'data' => $produk
            ]);
        } else{
            return collect([
                'respon' => 500,
                'massage' => "Produk Tidak Ditemukan"
            ]);
        }
    }

   
    public function update($id)
    {
        $produk = Produk::find($id);
        if($produk){
            $produk->nama = request('nama') ?? $produk->nama;
            $produk->harga = request('harga') ?? $produk->harga;
            $produk->stok = request('stok') ?? $produk->stok;
            $produk->berat = request('berat') ?? $produk->berat;
            $produk->deskripsi = request('deskripsi') ?? $produk->deskripsi;
            $produk->save();

            return collect([
                'status' => 69,
                'data' => $produk
            ]);
        } else{
            return collect([
                'respon' => 500,
                'massage' => "Produk Tidak Ditemukan"
            ]);
        }
    }

    public function destroy($id)
    {
        $produk = Produk::find($id);
        if($produk){
            $produk->delete();
            return collect([
                'status' => 69,
                'data' => "Produk berhasil di Hapus"
            ]);
        } else{
            return collect([
                'respon' => 500,
                'massage' => "Produk Tidak Ditemukan"
            ]);
        }
    }
}
