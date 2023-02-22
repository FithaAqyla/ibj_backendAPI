<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create('pesertas', function (Blueprint $table) {
            $table->id('id_user');
            $table->string('name');
            $table->string('email');
            $table->text('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations
     */
    public function down()
    {
        Schema::dropIfExists('pesertas');
    }
};
