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
        // Only add foreign key constraints, not columns

        Schema::table('students', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });

        Schema::table('user_role', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->foreign('teacher_id')->references('id')->on('teachers')->onDelete('set null');
        });

        Schema::table('schedules', function (Blueprint $table) {
            $table->foreign('course_id')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('schedules', function (Blueprint $table) {
            $table->dropForeign(['course_id']);
        });

        Schema::table('courses', function (Blueprint $table) {
            $table->dropForeign(['teacher_id']);
        });

        Schema::table('user_role', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
            $table->dropForeign(['role_id']);
        });

        Schema::table('teachers', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });

        Schema::table('students', function (Blueprint $table) {
            $table->dropForeign(['user_id']);
        });
    }
};
