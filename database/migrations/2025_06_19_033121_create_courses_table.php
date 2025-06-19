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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); 
            $table->string('subject', 50)->comment('The subject or title of the course');
            $table->string('course_code', 10)->unique()->comment('The unique code for the course');
            $table->integer('credits')->comment('The number of credits for the course');
            $table->string('description', 255)->nullable()->comment('A brief description of the course');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};
