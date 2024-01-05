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
        Schema::create('applications', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('job_id')->nullable();
            $table->unsignedBigInteger('employer_id')->nullable();
            $table->unsignedBigInteger('candidate_id')->nullable();
            $table->string('note')->nullable();
            $table->string('status')->default(1);
            $table->timestamps();

            $table->foreign('job_id')->references('id')->on('jobs')->cascadeOnDelete();
            $table->foreign('employer_id')->references('id')->on('users')->cascadeOnDelete();
            $table->foreign('candidate_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('applications');
    }
};
