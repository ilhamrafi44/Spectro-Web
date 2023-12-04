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
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('name')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('link')->nullable();
            $table->text('waktu_kerja')->nullable();
            $table->text('waktu_istirahat')->nullable();
            $table->text('info_gaji')->nullable();
            $table->text('info_tunjangan')->nullable();
            $table->text('hari_libur')->nullable();
            $table->string('jumlah_kandidat')->nullable();
            $table->string('kualifikasi')->nullable();
            $table->text('catatan')->nullable();
            $table->string('priority_job')->nullable();
            $table->string('urgent_job')->nullable();
            $table->date('expired_date')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('salary')->nullable();
            $table->string('total_tunjangan')->nullable();
            $table->string('salary_type')->nullable();
            $table->string('experience')->nullable();
            $table->string('career_level')->nullable();
            $table->string('qualification')->nullable();
            $table->string('file_photos_id')->nullable();
            $table->string('location_id')->nullable();
            $table->string('category_id')->nullable();
            $table->string('industry_id')->nullable();
            $table->string('job_type')->nullable();
            $table->string('mata_gaji')->nullable();
            $table->string('mata_tunjangan')->nullable();
            $table->string('slug')->nullable()->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs');
    }
};
