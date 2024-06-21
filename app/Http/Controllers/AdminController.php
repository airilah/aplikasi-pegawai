<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function dashboard()
    {
        $pegawai = Pegawai::all();
        $tetap = DB::table('pegawais')->where('status_id', 1)->count();
        $magang = DB::table('pegawais')->where('status_id', 2)->count();
        $kontrak = DB::table('pegawais')->where('status_id', 3)->count();
        $admin = DB::table('users')->where('role', 'admin')->count();
        $user = User::all();
        $pendidikan = DB::table('pegawais')
        ->join('pendidikans', 'pegawais.pendidikan_id', '=', 'pendidikans.id')
        ->select('pendidikans.nama_pendidikan', DB::raw('count(*) as total'))
        ->groupBy('pendidikans.nama_pendidikan')
        ->get();

        $json_data1 = json_encode($pendidikan);

        $status = [
            ['nama_status' => 'Tetap', 'total' => $tetap],
            ['nama_status' => 'Magang', 'total' => $magang],
            ['nama_status' => 'Kontrak', 'total' => $kontrak],
        ];

        $json_data2 = json_encode($status);

        return view('admin.dashboard', compact('pegawai', 'tetap', 'magang', 'kontrak', 'admin', 'json_data1','json_data2','pegawai','user'));
    }


}
