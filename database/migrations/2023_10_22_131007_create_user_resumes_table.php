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
        Schema::create('user_resumes', function (Blueprint $table) {
            $table->id();
            $table->string('user_id')->nullable();
            $table->string('cv_file')->nullable();
            $table->string('language_certificate_file')->nullable();
            $table->string('ssw_certificate_file')->nullable();
            $table->string('other_certificate_file')->nullable();
            $table->string('driving_license_file')->nullable();
            $table->string('pasport_file')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_resumes');
    }
};
