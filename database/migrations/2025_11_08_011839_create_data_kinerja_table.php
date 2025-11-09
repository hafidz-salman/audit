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
        Schema::create('data_kinerja', function (Blueprint $table) {
            $table->id('kinerja_id');
            $table->unsignedBigInteger('indikator_id')->nullable();
            $table->unsignedBigInteger('kriteria_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->string('periode', 20)->nullable();
            $table->decimal('capaian', 10, 2)->nullable();
            $table->text('bukti_file')->nullable();
            $table->string('status', 30)->nullable();
            $table->timestamp('created_at')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_kinerja');
    }
};
