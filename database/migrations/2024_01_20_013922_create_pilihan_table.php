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
        Schema::create('pilihan', function (Blueprint $table) {
            $table->id();
            $table->string('deskripsi');
            $table->boolean('isTrue');
            $table->unsignedBigInteger('soal_id');
            $table->timestamps();

            $table->foreign('soal_id')->references('id')->on('soal');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pilihan');
    }
};
