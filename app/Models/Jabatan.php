<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;


    public function pegawai()
    {
        return $this->hasMany(Pegawai::class);
    }

    public function departemen() {
        return $this->belongsTo(Departemen::class);
    }
}
