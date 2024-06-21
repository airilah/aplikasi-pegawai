<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JabatanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('jabatans')->insert([
            ["departemen_id" => 14, "nama_jabatan" => "Chief Executive Officer (CEO)"],
            ["departemen_id" => 14, "nama_jabatan" => "Chief Operating Officer (COO)"],
            ["departemen_id" => 2, "nama_jabatan" => "Chief Financial Officer (CFO)"],
            ["departemen_id" => 5, "nama_jabatan" => "Chief Technology Officer (CTO)"],
            ["departemen_id" => 3, "nama_jabatan" => "Chief Marketing Officer (CMO)"],
            ["departemen_id" => 1, "nama_jabatan" => "Chief Human Resources Officer (CHRO)"],
            ["departemen_id" => 14, "nama_jabatan" => "General Manager (GM)"],
            ["departemen_id" => 14, "nama_jabatan" => "Operations Manager"],
            ["departemen_id" => 2, "nama_jabatan" => "Finance Manager"],
            ["departemen_id" => 1, "nama_jabatan" => "HR Manager"],
            ["departemen_id" => 3, "nama_jabatan" => "Marketing Manager"],
            ["departemen_id" => 4, "nama_jabatan" => "Sales Manager"],
            ["departemen_id" => 5, "nama_jabatan" => "IT Manager"],
            ["departemen_id" => 5, "nama_jabatan" => "Software Engineer"],
            ["departemen_id" => 5, "nama_jabatan" => "System Analyst"],
            ["departemen_id" => 2, "nama_jabatan" => "Accountant"],
            ["departemen_id" => 1, "nama_jabatan" => "HR Specialist"],
            ["departemen_id" => 3, "nama_jabatan" => "Marketing Specialist"],
            ["departemen_id" => 4, "nama_jabatan" => "Sales Representative"],
            ["departemen_id" => 9, "nama_jabatan" => "Customer Service Representative"],
            ["departemen_id" => 12, "nama_jabatan" => "Administrative Assistant"],
            ["departemen_id" => 12, "nama_jabatan" => "Office Manager"],
            ["departemen_id" => 12, "nama_jabatan" => "Receptionist"],
            ["departemen_id" => 12, "nama_jabatan" => "Data Entry Clerk"],
            ["departemen_id" => 12, "nama_jabatan" => "Executive Assistant"],
            ["departemen_id" => 6, "nama_jabatan" => "Production Manager"],
            ["departemen_id" => 6, "nama_jabatan" => "Quality Control Inspector"],
            ["departemen_id" => 8, "nama_jabatan" => "Warehouse Manager"],
            ["departemen_id" => 8, "nama_jabatan" => "Logistics Coordinator"],
            ["departemen_id" => 6, "nama_jabatan" => "Maintenance Technician"],
            ["departemen_id" => 3, "nama_jabatan" => "Graphic Designer"],
            ["departemen_id" => 3, "nama_jabatan" => "Content Writer"],
            ["departemen_id" => 3, "nama_jabatan" => "Social Media Manager"],
            ["departemen_id" => 3, "nama_jabatan" => "Brand Manager"],
        ]);

    }
}
