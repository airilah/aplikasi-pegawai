<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendidikanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pendidikans')->insert([
            ["nama_pendidikan" => "SLTA/SMA/SMK"],
            ["nama_pendidikan" => "D1 (Diploma 1)"],
            ["nama_pendidikan" => "D2 (Diploma 2)"],
            ["nama_pendidikan" => "D3 (Diploma 3)"],
            ["nama_pendidikan" => "S1 (Sarjana)"],
            ["nama_pendidikan" => "S2 (Magister)"],
            ["nama_pendidikan" => "S3 (Doktor)"],
        ]);

    }
}
