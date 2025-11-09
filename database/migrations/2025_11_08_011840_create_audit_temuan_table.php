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
        Schema::create('audit_temuan', function (Blueprint $table) {
            $table->id('temuan_id');
            $table->unsignedBigInteger('audit_id')->nullable();
            $table->text('deskripsi_temuan')->nullable();
            $table->string('kategori_temuan', 50)->nullable();
            $table->text('rekomendasi')->nullable();
            $table->string('severity', 20)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('audit_temuan');
    }
};
