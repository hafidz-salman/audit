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
        Schema::create('audit', function (Blueprint $table) {
            $table->id('audit_id');
            $table->unsignedBigInteger('validasi_id')->nullable();
            $table->unsignedBigInteger('auditor_id')->nullable();
            $table->date('tanggal_audit')->nullable();
            $table->string('status_audit', 20)->nullable();
            $table->decimal('skor_total', 10, 2)->nullable();
            $table->string('periode', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit');
    }
};
