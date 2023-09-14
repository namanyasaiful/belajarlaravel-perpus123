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
        Schema::create('anggota', function (Blueprint $table) {
            $table->id('id_anggota');
            $table->timestamps();
            $table->char('kode_anggota0', 9);
            $table->string('nama_anggota', 100);
            $table->char('jk_anggota', 1);
            $table->char('jurusan_anggota');
            $table->char('no_telp_anggota', 13);
            $table->string('alamat_anggota', 100);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('anggota');
    }
};
