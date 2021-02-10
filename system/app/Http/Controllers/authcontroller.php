<?php

namespace App\Http\Controllers;
use Auth;
use App\Models\User;
use App\Models\Pembeli;
use App\Models\Penjual;
use App\Models\Admin;

class authcontroller extends Controller
{
	function showLogin(){
		return view('login_adm');

	}
	
	function create(){
		return view('register_adm');
	}

	function createPenjual(){
		return view('register_penjual');
	}

	function createPembeli(){
		return view('register_pembeli');
	}

	function LoginProcess(){
		// if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
		// 	return redirect('admin/beranda')-> with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()-> with('danger', 'Silahkan cek email dan password anda');
		// 	}

		// $email = request('email');
		// $user = Pembeli::where('email', $email)->first();
		// if($user){
		// 	$guard = 'pembeli';
		// }else{
		// 	$user = Penjual::where('email', $email)->first();
		// 	if($user){
		// 		$guard = 'penjual';
		// 	}else{
		// 		$guard = false;
		// 	}
		// }

		// if(!$guard){
		// 	return back()->with('danger', 'Akun Tidak Ditemukan');
		// }else{
		// 	if(Auth::guard($guard)->attempt(['email'=>request('email'), 'password'=>request('password')])){
		// 		return redirect("admin/beranda/$guard")->with('success', 'Login Berhasil');
		// 	}else{
		// 		return back()-> with('danger', 'Silahkan cek email dan password anda');
		// 	}
		// }

		if(request('login_as')==1){
			if(Auth::guard('pembeli')->attempt(['email' => request('email'), 'password' => request('password')])){
				return redirect('pembeli/home')-> with('success', 'Login Berhasil');
			}else{
				return back()-> with('danger', 'Silahkan cek email dan password anda');
			}

		} elseif(request('login_as')==2){
			if(Auth::attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('penjual/beranda')-> with('success', 'Login Berhasil');
			}else{
				return back()-> with('danger', 'Silahkan cek email dan password anda');
			}
		}else{
			if(Auth::guard('admin')->attempt(['email' => request('email'), 'password' => request('password')])){
			return redirect('admin/beranda')-> with('success', 'Login Berhasil');
			}else{
				return back()-> with('danger', 'Silahkan cek email dan password anda');
			}
		}
	}

	function Register(){
		$admin = new admin;
		$admin-> nama = request('nama');
		$admin-> username = request('username');
		$admin-> email = request('email');
		$admin-> password = bcrypt(request('password'));
		$admin-> save();

		return redirect ('/login_adm')-> with ('success', 'Registrasi berhasil');
	}

	function RegisterPenjual(){
		$user = new user;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = bcrypt(request('password'));
		$user-> save();

		return redirect ('/login_adm')-> with ('success', 'Registrasi berhasil');
	}

	function RegisterPembeli(){
		$pembeli = new pembeli;
		$pembeli-> nama = request('nama');
		$pembeli-> username = request('username');
		$pembeli-> email = request('email');
		$pembeli-> password = bcrypt(request('password'));
		$pembeli-> save();

		return redirect ('/login_adm')-> with ('success', 'Registrasi berhasil');
	}

	function destory(){
		Auth::logout();
		Auth::guard('pembeli')->logout();
		Auth::guard('admin')->logout();
		return view('login_adm');

	}

}