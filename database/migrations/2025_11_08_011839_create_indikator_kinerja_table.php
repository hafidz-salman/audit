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
        Schema::create('indikator_kinerja', function (Blueprint $table) {
            $table->id('indikator_id');
            $table->unsignedBigInteger('standar_id')->nullable();
            $table->string('nama_indikator', 150)->nullable();
            $table->decimal('target', 10, 2)->nullable();
            $table->string('status', 30)->nullable();
            
            $table->foreign('standar_id')->references('standar_id')->on('standar_mutu')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('indikator_kinerja');
    }
};
