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
        Schema::create('usercourses', function (Blueprint $table) {
            $table->id('id_usercourses');
            
            $table->unsignedBigInteger('id_courses');
            $table->foreign('id_courses')->references('id_courses')->on('courses')->onDelete('cascade');
            
            $table->unsignedBigInteger('id_user');
            $table->foreign('id_user')->references('id_user')->on('pesertas')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usercourses');
    }
};
