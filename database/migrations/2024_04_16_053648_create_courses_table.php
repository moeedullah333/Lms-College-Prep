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
            $table->string('course_name',255)->nullable();
            $table->string('short_description',255)->nullable();
            $table->longText('description')->nullable();
            $table->float('price')->nullable();
            $table->integer('slots')->nullable();
            $table->integer('total_hour')->nullable();
            $table->string('day',255)->nullable();
            $table->time('time1')->nullable();
            $table->time('time2')->nullable();
            $table->tinyInteger('status')->comment('1:Active,2:InActive')->nullable();
            $table->string('instructor_name',255)->nullable();
            $table->string('image',255)->nullable();
            $table->date('start_date');
            $table->date('end_date');
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
