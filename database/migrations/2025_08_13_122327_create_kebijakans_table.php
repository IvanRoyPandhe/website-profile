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
        Schema::create('kebijakans', function (Blueprint $table) {
            $table->id();
            $table->string('cluster');
            $table->string('sub_cluster')->nullable();
            $table->integer('nomor');
            $table->text('nama_dokumen');
            $table->string('link_download');
            $table->boolean('is_active')->default(true);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kebijakans');
    }
};
