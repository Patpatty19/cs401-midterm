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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id(); 
            $table->string('first_name', 255)->comment('The teacher\'s first name');
            $table->string('last_name', 255)->comment('The teacher\'s last name');
            $table->string('email', 50)->unique()->comment('The teacher\'s email address');
            $table->string('department', 10)->comment('The department code the teacher belongs to');
            $table->dateTime('birthday')->comment('The teacher\'s date of birth');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
