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
        Schema::create('employer_profiles', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('file_logo_id')->nullable();
            $table->string('file_sampul_id')->nullable();
            $table->string('situs_web')->nullable();
            $table->string('tahun_pendirian')->nullable();
            $table->string('ukuran_perusahaan')->nullable();
            $table->string('kategori_perusahaan')->nullable();
            $table->string('url_video')->nullable();
            $table->string('deskripsi')->nullable();
            $table->string('sosial_id')->nullable();
            $table->string('negara')->nullable();
            $table->string('anggota_id')->nullable();
            $table->string('alamat')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employer_profiles');
    }
};
