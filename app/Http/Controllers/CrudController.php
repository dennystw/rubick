<?php

namespace App\Http\Controllers;

use App\Crud;
use Illuminate\Http\Request;

class CrudController extends Controller
{
    public function index()
    {
        $datas = Crud::orderBy('id', 'DESC')->paginate(3);
        return View('show')->with('datas', $datas);
    }

    public function create()
    {
        return View('add');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $tambah = new Crud();
        $tambah->judul = $request['judul'];
        $tambah->isi = $request['isi'];
        $tambah->save();
        return redirect()->to('/');
    }

    public function show($id)
    {
        $tampilkan = Crud::find($id);
        return view('tampil')->with('tampilkan', $tampilkan);
    }

    public function edit($id)
    {
        $tampiledit = Crud::where('id', $id)->first();
        return view('edit')->with('tampiledit', $tampiledit);
    }

    public function update(Request $request, $id)
    {
        $update = Crud::where('id', $id)->first();
        $update->judul = $request['judul'];
        $update->isi = $request['isi'];
        $update->update();
        return redirect()->to('/');
    }

   public function destroy($id)
    {
        $hapus = Crud::find($id);
        $hapus->delete();
        return redirect()->to('/');
    }
}
