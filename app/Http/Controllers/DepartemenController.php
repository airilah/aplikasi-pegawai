<?php

namespace App\Http\Controllers;

use App\Models\Departemen;
use Illuminate\Http\Request;

class DepartemenController extends Controller
{
    public function daftar_departemen()
    {
        return view('admin/departemen', [
            'departemen' => departemen::all(),
        ]);
    }

    public function tambah_departemen(Request $request)
    {
        $departemen=new departemen;
        $departemen->nama_departemen=$request->nama_departemen;
        $departemen->save();

        return redirect('/daftar_departemen')->with("tambah_departemen", "Departemen berhasil ditambah!");
    }


    public function edit_departemen(Request $request, $id)
    {
        $departemen= departemen::find($request->id);
        $departemen->nama_departemen=$request->nama_departemen;
        $departemen->save();

        return redirect('/daftar_departemen')->with('edit_departemen', 'Departemen berhasil diupdate!');
    }


    public function delete_departemen($id)
    {
        departemen::find($id)->delete();
        return redirect()->back()->with("delete_departemen","departemen Berhasil di Hapus");
    }
}
