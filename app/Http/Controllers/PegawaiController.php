<?php

namespace App\Http\Controllers;

use App\Models\Status;
use App\Models\Jabatan;
use App\Models\Pegawai;
use App\Models\Departemen;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PegawaiController extends Controller
{

    public function daftar_pegawai()
    {
        return view('admin/pegawai', [
            'pegawai' => Pegawai::all(),
            'jabatan' => Jabatan::all(),
            'departemen' => Departemen::all(),
            'pendidikan' => Pendidikan::all(),
            'status' => Status::all(),
        ]);
    }

    public function tambah_pegawai(Request $request)
    {
        // dd($request->all());
        $pegawai=new Pegawai;
        $pegawai->nama_lengkap=$request->nama_lengkap;
        $pegawai->npwp=$request->npwp;
        $pegawai->jabatan_id=$request->jabatan_id;
        $pegawai->departemen_id=$request->departemen_id;
        $pegawai->tgl_lahir=$request->tgl_lahir;
        $pegawai->jenis_kelamin=$request->jenis_kelamin;
        $pegawai->alamat=$request->alamat;
        $pegawai->no_telp=$request->no_telp;
        $pegawai->email=$request->email;
        $pegawai->tgl_gabung=$request->tgl_gabung;
        $pegawai->status_id=$request->status_id;
        $pegawai->pendidikan_id=$request->pendidikan_id;
        $pegawai->nama_sekolah=$request->nama_sekolah;
        $pegawai->gaji=$request->gaji;

        if ($request->hasFile('foto')) {
            $fileName1 = $request->file('foto')->getClientOriginalName();
            $request->file('foto')->move('assets/img/upload/', $fileName1);
            $pegawai->foto = $fileName1;
        }

        $pegawai->save();

        return redirect('/daftar_pegawai')->with("tambah_pegawai", "Pegawai berhasil ditambah!");
    }

    public function detail_pegawai($id)
    {
        return view('admin/detail', [
            'pegawai' => Pegawai::find($id),
            'jabatan' => Jabatan::all(),
            'departemen' => Departemen::all(),
            'pendidikan' => Pendidikan::all(),
            'status' => Status::all(),
        ]);
    }

    public function update_pegawai($id)
    {
        return view('admin/update/update_pegawai', [
            'pegawai' => Pegawai::find($id),
            'jabatan' => Jabatan::all(),
            'departemen' => Departemen::all(),
            'pendidikan' => Pendidikan::all(),
            'status' => Status::all(),
        ]);
    }


    public function edit_pegawai(Request $request, $id)
    {
        $pegawai= Pegawai::find($request->id);
        $pegawai->nama_lengkap=$request->nama_lengkap;
        $pegawai->npwp=$request->npwp;
        $pegawai->jabatan_id=$request->jabatan_id;
        $pegawai->departemen_id=$request->departemen_id;
        $pegawai->tgl_lahir=$request->tgl_lahir;
        $pegawai->jenis_kelamin=$request->jenis_kelamin;
        $pegawai->alamat=$request->alamat;
        $pegawai->no_telp=$request->no_telp;
        $pegawai->email=$request->email;
        $pegawai->tgl_gabung=$request->tgl_gabung;
        $pegawai->status_id=$request->status_id;
        $pegawai->pendidikan_id=$request->pendidikan_id;
        $pegawai->nama_sekolah=$request->nama_sekolah;
        $pegawai->gaji=$request->gaji;

        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move('assets/img/upload/', $filename);
            $pegawai->foto = $filename;
        }

        $pegawai->save();

        return redirect('/daftar_pegawai')->with('edit_pegawai', 'Pegawai berhasil diupdate!');
    }


    public function delete_pegawai($id)
    {
        Pegawai::find($id)->delete();
        return redirect()->back()->with("delete_pegawai","Pegawai Berhasil di Hapus");
    }

}
