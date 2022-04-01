<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('city_manager', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('user');
            // $table->unsignedBigInteger('user_id');
            // $table->foreign('user_id')->references('id')->on('city');
            $table->foreignId('city_id')->constrained('city');
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('city_manager');
    }
};
