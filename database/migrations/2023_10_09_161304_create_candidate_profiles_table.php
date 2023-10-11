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
        Schema::create('candidate_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('jenis_kelamin')->nullable();
            $table->string('kota')->nullable();
            $table->date('tanggal_lahir')->nullable();
            $table->string('agama')->nullable();
            $table->string('usia')->nullable();
            $table->string('tinggi_badan')->nullable();
            $table->string('berat_badan')->nullable();
            $table->string('jurusan')->nullable();
            $table->string('b_inggris')->nullable();
            $table->string('b_jepang')->nullable();
            $table->string('tempat_belajar')->nullable();
            $table->string('sertifikat_lainnya')->nullable();
            $table->string('pendidikan_terakhir')->nullable();
            $table->string('skor_bahasa')->nullable();
            $table->string('sertifikat_ssw')->nullable();
            $table->string('sim_mobil')->nullable();
            $table->string('file_cv_id')->nullable();
            $table->string('file_serti_bahasa_id')->nullable();
            $table->string('file_serti_ssw_id')->nullable();
            $table->string('file_serti_lain_id')->nullable();
            $table->string('file_sim_id')->nullable();
            $table->string('file_paspor_id')->nullable();
            $table->string('total_views')->nullable();
            $table->string('deskripsi')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('candidate_profiles');
    }
};
