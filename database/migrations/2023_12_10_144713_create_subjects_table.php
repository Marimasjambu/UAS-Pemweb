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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->bigInteger('lecturer_id')->unsigned();
            $table->string('lecturer_name');
            $table->string('semester', 255);
            $table->string('academic_year', 255);
            $table->integer('sks');
            $table->string('code', 255);
            $table->text('description');
            $table->timestamps();

            $table->foreign('lecturer_id', 'lecturerid_foreign')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
