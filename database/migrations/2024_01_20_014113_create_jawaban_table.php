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
        Schema::create('jawaban', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('peserta_id');
            $table->unsignedBigInteger('soal_id');
            $table->unsignedBigInteger('pilihan_id');
            $table->timestamps();

            $table->foreign('peserta_id')->references('id')->on('peserta');
            $table->foreign('soal_id')->references('id')->on('soal');
            $table->foreign('pilihan_id')->references('id')->on('pilihan');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jawaban');
    }
};
