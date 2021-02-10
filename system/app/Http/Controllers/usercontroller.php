<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\UserDetail;
use App\Http\Requests\User\StoreRequest;

class usercontroller extends Controller {
	function index(){
		$data['list_user'] = User::withCount('produk')->get();
		return view('User.index', $data);
	}

	function create(){
		return view('User.create');

	}

	function store(StoreRequest $request){
		$user = new user;
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		$user-> password = (request('password'));
		$user-> save();

		$userdetail = new UserDetail;
		$userdetail-> id_user = $user->id;
		$userdetail-> no_hp = request('no_hp');
		$userdetail->save();

		return redirect ('admin/user')-> with ('success', 'Data berhasil ditambahkan');

	}


	function show(User $user){
		$loggedUser = request()->user();

		if($loggedUser->id != $user->id) return abort(403);

		return view('User.show', $data);

	}

	function edit(User $user){
		$data['user'] = $user;
		return view('User.edit', $data);
	}

	function update(User $user){
		$user-> nama = request('nama');
		$user-> username = request('username');
		$user-> email = request('email');
		if(request('password')) $user-> password = request('password');
		$user-> save();

		$userdetail = new UserDetail;
		$userdetail-> id_user = $user->id;
		$userdetail-> no_hp = request('no_hp');
		$userdetail->save();

		return redirect ('admin/user')-> with ('success', 'Data berhasil diedit');

	}

	function destroy(User $user){
		$user->delete();

		return redirect ('admin/user')-> with ('danger', 'Data berhasil dihapus');

	}
}