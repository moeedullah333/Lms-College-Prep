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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('first_name', 255)->nullable();
            $table->string('last_name', 255)->nullable();
            $table->string('phone_number', 255)->nullable();
            $table->string('email')->unique();
            $table->string('parent_first_name')->nullable();
            $table->string('parent_last_name')->nullable();
            $table->string('phone_number_alternative')->nullable();
            $table->string('email_alternative')->nullable();
            // $table->integer('grade_id')->nullable();
            // $table->integer('course_id')->nullable();
            $table->string('grade', 255)->nullable();
            $table->string('course_name', 255)->nullable();
            $table->string('school_name', 255);
            $table->integer('country_id')->nullable();
            $table->integer('state_id')->nullable();
            $table->integer('city_id')->nullable();
            $table->integer('role')->nullable()->comment("1:Admin,2:User");
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
