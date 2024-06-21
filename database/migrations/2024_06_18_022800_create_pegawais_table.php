<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
    Schema::create('pegawais', function (Blueprint $table) {
        $table->id();
        $table->string('nama_lengkap');
        $table->string('npwp')->unique()->nullable();
        $table->foreignId('jabatan_id')->constrained('jabatans');
        $table->foreignId('departemen_id')->constrained('departemens');
        $table->date('tgl_lahir');
        $table->string('jenis_kelamin');
        $table->string('alamat');
        $table->string('no_telp');
        $table->string('email');
        $table->date('tgl_gabung');
        $table->foreignId('status_id')->constrained('statuses');
        $table->foreignId('pendidikan_id')->constrained('pendidikans');
        $table->string('nama_sekolah');
        $table->string('gaji');
        $table->string('foto')->nullable();
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pegawais');
    }
};
