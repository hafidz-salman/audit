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
        Schema::create('tindak_lanjut', function (Blueprint $table) {
            $table->id('tindak_id');
            $table->unsignedBigInteger('temuan_id')->nullable();
            $table->unsignedBigInteger('penanggung_jawab')->nullable();
            $table->text('rencana_perbaikan')->nullable();
            $table->date('tanggal_target')->nullable();
            $table->string('status_tindak', 20)->nullable();
            $table->date('tanggal_selesai')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tindak_lanjut');
    }
};
