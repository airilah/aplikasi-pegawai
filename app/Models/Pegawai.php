<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_lengkap',
        'jabatan_id',
        'departemen_id',
        'tgl_lahir',
        'jenis_kelamin',
        'alamat',
        'no_telp',
        'tgl_gabung',
        'status_id',
        'pendidikan_terakhir',
        'gaji',
    ];

    public function jabatan() {
        return $this->belongsTo(Jabatan::class);
    }
    public function departemen() {
        return $this->belongsTo(Departemen::class);
    }
    public function status() {
        return $this->belongsTo(Status::class);
    }
    public function pendidikan() {
        return $this->belongsTo(Pendidikan::class);
    }

}
