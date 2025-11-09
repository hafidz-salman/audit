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
        Schema::create('validasi', function (Blueprint $table) {
            $table->id('validasi_id');
            $table->unsignedBigInteger('kinerja_id')->nullable();
            $table->unsignedBigInteger('validator_id')->nullable();
            $table->date('tanggal_validasi')->nullable();
            $table->string('status_validasi', 20)->nullable();
            $table->text('catatan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('validasi');
    }
};
