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
        Schema::table('biaya_pendidikans', function (Blueprint $table) {
            $table->string('title');
            $table->string('image');
            $table->text('description')->nullable();
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('biaya_pendidikans', function (Blueprint $table) {
            $table->dropColumn(['title', 'image', 'description', 'sort_order', 'is_active']);
        });
    }
};
