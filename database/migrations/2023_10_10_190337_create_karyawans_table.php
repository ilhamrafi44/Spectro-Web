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
            Schema::create('karyawans', function (Blueprint $table) {
                $table->id();
                $table->string('user_id')->nullable();
                $table->string('nama')->nullable();
                $table->string('jabatan')->nullable();
                $table->string('pengalaman')->nullable();
                $table->string('file_profile_id')->nullable();
                $table->string('facebook_url')->nullable();
                $table->string('twitter_url')->nullable();
                $table->string('googleplus_url')->nullable();
                $table->string('linkedin_url')->nullable();
                $table->string('dribbble_url')->nullable();
                $table->string('deskripsi')->nullable();
                $table->timestamps();
            });
        }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('karyawans');
    }
};
