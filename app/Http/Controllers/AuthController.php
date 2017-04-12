<?php

namespace App\Http\Controllers;

use App\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
	public function create() {
		return view('/auth/daftar');
	}

	public function store(Request $request) {
		$this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'level' => 'required',
            'password' => 'required'
        ]);

        $tambah = new Auth();
        $tambah->name = $request['name'];
        $tambah->email = $request['email'];
        $tambah->password = bcrypt('password');
        $tambah->level = $request['level'];
        $tambah->save();
        return redirect()->to('/');
	}
}
