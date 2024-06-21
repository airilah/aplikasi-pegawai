<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Departemen;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JabatanController extends Controller
{
    public function daftar_jabatan()
    {
        return view('admin/jabatan', [
            'jabatan' => Jabatan::all(),
            'departemen' => Departemen::all(),
        ]);
    }

    public function tambah_jabatan(Request $request)
    {
        // dd($request->all());
        $jabatan=new Jabatan;
        $jabatan->departemen_id=$request->departemen_id;
        $jabatan->nama_jabatan=$request->nama_jabatan;


        $jabatan->save();

        return redirect('/daftar_jabatan')->with("tambah_jabatan", "jabatan berhasil ditambah!");
    }


    public function edit_jabatan(Request $request, $id)
    {
        $jabatan= Jabatan::find($request->id);
        $jabatan->departemen_id=$request->departemen_id;
        $jabatan->nama_jabatan=$request->nama_jabatan;

        $jabatan->save();

        return redirect('/daftar_jabatan')->with('edit_jabatan', 'jabatan berhasil diupdate!');
    }


    public function delete_jabatan($id)
    {
        jabatan::find($id)->delete();
        return redirect()->back()->with("delete_jabatan","jabatan Berhasil di Hapus");
    }
}
