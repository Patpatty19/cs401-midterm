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
        Schema::create('schedules', function (Blueprint $table) {
            $table->id(); 
            $table->string('day_of_week', 10)->comment('The day of the week for the schedule (e.g., Monday)');
            $table->dateTime('time_slot')->comment('The date and time slot for the schedule');
            $table->string('room', 20)->comment('The room where the class is held');
            $table->integer('term')->comment('The academic term (e.g., 1 for first term)');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schedules');
    }
};
