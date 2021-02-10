<?php 

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Auth;

class settingcontroller extends Controller
{
	function index(){
		if(Auth::guard('pembeli')->check()){
			$data['user'] = Auth::guard('pembeli')->user();
		}else{
			$data['user'] = Auth::guard('penjual')->user();
		}
		return view('setting.index', $data);
	}

	function store(){
		if(request('sekarang')){
			if(Auth::guard('pembeli')->check()){
				$user = Auth::guard('pembeli')->user();
			}else{
				$user = Auth::guard('penjual')->user();
			}
			$check = Hash::check(request('sekarang'), $user->password);
			if($check){
				if(request('baru') == request('konfirmasi')){
					$user->password = request('baru');
					$user->save();

					return back()->with('success', 'Password Berhasil Diganti, Silahkan Logout dan Login Kembali');
				}else{
					return back()->with('danger', 'Password Baru Tidak Sesuai');
				}
			}
			else{
				return back()->with('danger', 'Password Sekarang Salah');
				}
			}
		else{
			return back()->with('danger', 'Password Kosong');
			}
	}
}
