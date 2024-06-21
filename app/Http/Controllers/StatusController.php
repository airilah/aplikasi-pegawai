<?php

namespace App\Http\Controllers;

use App\Models\Status;
use Illuminate\Http\Request;

class StatusController extends Controller
{
    public function daftar_status()
    {
        return view('admin/status', [
            'status' => Status::all(),
        ]);
    }

    public function tambah_status(Request $request)
    {
        $status=new Status;
        $status->nama_status=$request->nama_status;
        $status->save();

        return redirect('/daftar_status')->with("tambah_status", "status berhasil ditambah!");
    }


    public function edit_status(Request $request, $id)
    {
        $status= Status::find($request->id);
        $status->nama_status=$request->nama_status;
        $status->save();

        return redirect('/daftar_status')->with('edit_status', 'status berhasil diupdate!');
    }


    public function delete_status($id)
    {
        status::find($id)->delete();
        return redirect()->back()->with("delete_status","status Berhasil di Hapus");
    }
}
