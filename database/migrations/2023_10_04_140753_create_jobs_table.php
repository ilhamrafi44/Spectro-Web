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
            $table->string('name')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('link')->nullable();
            $table->string('waktu_kerja')->nullable();
            $table->string('waktu_istirahat')->nullable();
            $table->string('info_gaji')->nullable();
            $table->string('info_tunjangan')->nullable();
            $table->string('hari_libur')->nullable();
            $table->string('jumla_kandidat')->nullable();
            $table->string('kualifikasi')->nullable();
            $table->string('catatan')->nullable();
            $table->string('priority_job')->nullable();
            $table->string('urgent_job')->nullable();
            $table->date('expired_date')->nullable();
            $table->date('jenis_kelamin')->nullable();
            $table->string('salary')->nullable();
            $table->date('salary_type')->nullable();
            $table->date('experience')->nullable();
            $table->date('career_level')->nullable();
            $table->date('qualification')->nullable();
            $table->date('file_photos_id')->nullable();
            $table->string('location_id')->nullable();
            $table->date('category_id')->nullable();
            $table->date('industry_id')->nullable();
            $table->date('job_type')->nullable();
            $table->date('slug')->nullable()->unique();
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
