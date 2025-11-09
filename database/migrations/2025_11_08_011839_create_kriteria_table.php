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
        Schema::create('kriteria', function (Blueprint $table) {
            $table->id('kriteria_id');
            $table->unsignedBigInteger('indikator_id')->nullable();
            $table->string('nama_kriteria', 150)->nullable();
            $table->text('deskripsi')->nullable();
            $table->decimal('bobot', 5, 2)->nullable();
            $table->decimal('nilai_target', 10, 2)->nullable();
            $table->decimal('nilai_capaian', 10, 2)->nullable();
            $table->string('status', 30)->nullable();
            
            $table->foreign('indikator_id')->references('indikator_id')->on('indikator_kinerja')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kriteria');
    }
};
