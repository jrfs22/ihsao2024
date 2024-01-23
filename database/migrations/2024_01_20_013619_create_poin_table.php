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
        Schema::create('poin', function (Blueprint $table) {
            $table->id();
            $table->double('poin');
            $table->unsignedBigInteger('cabang_lomba_id');
            $table->unsignedBigInteger('peserta_id');
            $table->timestamps();

            $table->foreign('cabang_lomba_id')->references('id')->on('cabang_lomba');
            $table->foreign('peserta_id')->references('id')->on('peserta');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('poin');
    }
};
