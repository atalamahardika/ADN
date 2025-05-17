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
        Schema::create('publikasi_mandiris', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('peneliti');
            $table->year('tahun');
            $table->string('ruang_lingkup');
            $table->string('link')->nullable();
            $table->string('volume')->nullable();
            $table->string('nomor')->nullable();
            $table->string('halaman')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('publikasi_mandiris');
    }
};
