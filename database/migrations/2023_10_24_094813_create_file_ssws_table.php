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
        Schema::create('file_ssws', function (Blueprint $table) {
            $table->id();
            $table->string('ssw_id')->nullable();
            $table->string('job_id')->nullable();
            $table->string('employer_id')->nullable();
            $table->string('candidate_id')->nullable();
            $table->string('nama_file')->nullable();
            $table->string('file_id')->nullable();
            $table->string('level')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('file_ssws');
    }
};
