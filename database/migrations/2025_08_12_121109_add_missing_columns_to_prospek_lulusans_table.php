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
        Schema::table('prospek_lulusans', function (Blueprint $table) {
            $table->string('title');
            $table->text('description');
            $table->string('icon')->nullable();
            $table->string('category')->default('karir');
            $table->integer('sort_order')->default(0);
            $table->boolean('is_active')->default(true);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('prospek_lulusans', function (Blueprint $table) {
            $table->dropColumn(['title', 'description', 'icon', 'category', 'sort_order', 'is_active']);
        });
    }
};
