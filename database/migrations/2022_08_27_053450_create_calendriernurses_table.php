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
        Schema::create('calendriernurses', function (Blueprint $table) {
            $table->id();
            $table->string("day");
            $table->integer("dateDay");
            $table->string('rdvType');
            $table->string('rdvHours');
            $table->string('nomEnfant');
            $table->string('rdvEnfant');
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
        Schema::dropIfExists('calendriernurses');
    }
};
