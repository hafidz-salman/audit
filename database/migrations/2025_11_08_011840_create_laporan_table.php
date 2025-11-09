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
        Schema::create('laporan', function (Blueprint $table) {
            $table->id('laporan_id');
            $table->unsignedBigInteger('audit_id')->nullable();
            $table->string('periode', 20)->nullable();
            $table->text('hasil_ringkas')->nullable();
            $table->decimal('total_kinerja', 10, 2)->nullable();
            $table->text('rekomendasi_umum')->nullable();
            $table->text('file_laporan')->nullable();
            $table->unsignedBigInteger('dibuat_oleh')->nullable();
            $table->date('tanggal_laporan')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
