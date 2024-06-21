<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DepartemenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('departemens')->insert([
            ["nama_departemen" => "Sumber Daya Manusia"],
            ["nama_departemen" => "Keuangan"],
            ["nama_departemen" => "Pemasaran"],
            ["nama_departemen" => "Penjualan"],
            ["nama_departemen" => "Teknologi Informasi"],
            ["nama_departemen" => "Produksi"],
            ["nama_departemen" => "Pengembangan Produk"],
            ["nama_departemen" => "Logistik"],
            ["nama_departemen" => "Layanan Pelanggan"],
            ["nama_departemen" => "Hukum dan Kepatuhan"],
            ["nama_departemen" => "Riset dan Pengembangan"],
            ["nama_departemen" => "Administrasi"],
            ["nama_departemen" => "Manajemen Risiko"],
            ["nama_departemen" => "Operasi"],
            ["nama_departemen" => "Hubungan Masyarakat"]
        ]);

    }
}
