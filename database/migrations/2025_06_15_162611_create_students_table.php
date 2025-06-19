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
        Schema::create('students', function (Blueprint $table) {
            $table->id(); 
            $table->string('first_name', 255)->comment('The student\'s first name');
            $table->string('last_name', 255)->comment('The student\'s last name');
            $table->string('program', 255)->comment('The academic program the student is enrolled in');
            $table->string('enrollment_year', 4)->comment('The year the student enrolled (YYYY)');
            $table->dateTime('birthday')->comment('The student\'s date of birth');
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
