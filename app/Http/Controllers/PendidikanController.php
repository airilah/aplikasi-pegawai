<?php

namespace App\Http\Controllers;

use App\Models\Pendidikan;
use Illuminate\Http\Request;

class PendidikanController extends Controller
{
    public function daftar_pendidikan()
    {
        return view('admin/pendidikan', [
            'pendidikan' => Pendidikan::all(),
        ]);
    }

    public function tambah_pendidikan(Request $request)
    {
        $pendidikan=new Pendidikan;
        $pendidikan->nama_pendidikan=$request->nama_pendidikan;
        $pendidikan->save();

        return redirect('/daftar_pendidikan')->with("tambah_pendidikan", "pendidikan berhasil ditambah!");
    }


    public function edit_pendidikan(Request $request, $id)
    {
        $pendidikan= Pendidikan::find($request->id);
        $pendidikan->nama_pendidikan=$request->nama_pendidikan;
        $pendidikan->save();

        return redirect('/daftar_pendidikan')->with('edit_pendidikan', 'pendidikan berhasil diupdate!');
    }


    public function delete_pendidikan($id)
    {
        Pendidikan::find($id)->delete();
        return redirect()->back()->with("delete_pendidikan","pendidikan Berhasil di Hapus");
    }
}
