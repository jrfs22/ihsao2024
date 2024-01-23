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
        Schema::create('soal_myob', function (Blueprint $table) {
            $table->id();
            $table->string('pertanyaan');
            $table->string('file_soal');
            $table->unsignedBigInteger('cabang_lomba_id');
            $table->unsignedBigInteger('babak_id');
            $table->timestamps();

            $table->foreign('cabang_lomba_id')->references('id')->on('cabang_lomba');
            $table->foreign('babak_id')->references('id')->on('babak');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('soal_myob');
    }
};
