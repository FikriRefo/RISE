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
        Schema::create('program', function (Blueprint $table) {
            $table->id();
            $table->integer('level');
            $table->string('description');
            $table->unsignedBigInteger('category_program_id');
            $table->foreign('category_program_id')->references('id')->on('category_program');
            $table->unsignedBigInteger('placement_test_id');
            $table->foreign('placement_test_id')->references('id')->on('placement_test');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program');
    }
};
