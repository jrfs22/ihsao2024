<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('babak', function (Blueprint $table) {
            $table->id();
            $table->string('nama_babak');
            $table->timestamp('waktu_mulai');
            $table->time('lama_pengerjaan');
            $table->string('kode_soal');
            $table->unsignedBigInteger('cabang_lomba_id');
            $table->timestamps();

            $table->foreign('cabang_lomba_id')->references('id')->on('cabang_lomba');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('table_babak');
    }
};
