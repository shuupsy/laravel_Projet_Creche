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
        Schema::create('journalparents', function (Blueprint $table) {
            $table->id();
            $table->integer("personalId");
            $table->string("accident");
            $table->string("eat");
            $table->string("activity");
            $table->string("day");
            $table->string("arrivalTime");
            $table->string("poo");
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
        Schema::dropIfExists('journalparents');
    }
};
