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
        Schema::create('pengabdians', function (Blueprint $table) {
            $table->id();
            $table->string('tahun');
            $table->integer('nomor');
            $table->text('judul_pkm');
            $table->string('nama_ketua_tim');
            $table->string('kepakaran_ketua_tim');
            $table->text('nama_anggota_dosen')->nullable();
            $table->text('nama_mahasiswa')->nullable();
            $table->string('link_unduh')->nullable();
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengabdians');
    }
};
