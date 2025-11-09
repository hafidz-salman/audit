<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('data_kinerja', function (Blueprint $table) {
            $table->foreign('indikator_id')->references('indikator_id')->on('indikator_kinerja')->onDelete('cascade');
            $table->foreign('kriteria_id')->references('kriteria_id')->on('kriteria')->onDelete('set null');
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('cascade');
        });

        Schema::table('validasi', function (Blueprint $table) {
            $table->foreign('kinerja_id')->references('kinerja_id')->on('data_kinerja')->onDelete('cascade');
            $table->foreign('validator_id')->references('user_id')->on('users')->onDelete('set null');
        });

        Schema::table('audit', function (Blueprint $table) {
            $table->foreign('validasi_id')->references('validasi_id')->on('validasi')->onDelete('cascade');
            $table->foreign('auditor_id')->references('user_id')->on('users')->onDelete('set null');
        });

        Schema::table('audit_temuan', function (Blueprint $table) {
            $table->foreign('audit_id')->references('audit_id')->on('audit')->onDelete('cascade');
        });

        Schema::table('tindak_lanjut', function (Blueprint $table) {
            $table->foreign('temuan_id')->references('temuan_id')->on('audit_temuan')->onDelete('cascade');
            $table->foreign('penanggung_jawab')->references('user_id')->on('users')->onDelete('set null');
        });

        Schema::table('laporan', function (Blueprint $table) {
            $table->foreign('audit_id')->references('audit_id')->on('audit')->onDelete('cascade');
            $table->foreign('dibuat_oleh')->references('user_id')->on('users')->onDelete('set null');
        });

        Schema::table('audit_trail', function (Blueprint $table) {
            $table->foreign('user_id')->references('user_id')->on('users')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('audit_trail', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('laporan', function (Blueprint $table) {
            $table->dropForeign(['audit_id']);
            $table->dropForeign(['dibuat_oleh']);
        });

        Schema::table('tindak_lanjut', function (Blueprint $table) {
            $table->dropForeign(['temuan_id']);
            $table->dropForeign(['penanggung_jawab']);
        });

        Schema::table('audit_temuan', function (Blueprint $table) {
            $table->dropForeign(['audit_id']);
        });

        Schema::table('audit', function (Blueprint $table) {
            $table->dropForeign(['validasi_id']);
            $table->dropForeign(['auditor_id']);
        });

        Schema::table('validasi', function (Blueprint $table) {
            $table->dropForeign(['kinerja_id']);
            $table->dropForeign(['validator_id']);
        });

        Schema::table('data_kinerja', function (Blueprint $table) {
            $table->dropForeign(['indikator_id']);
            $table->dropForeign(['kriteria_id']);
            $table->dropForeign(['user_id']);
        });
    }
};