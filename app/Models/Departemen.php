<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;

    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }

    public function jabatan()
    {
        return $this->hasMany(Jabatan::class);
    }
}
