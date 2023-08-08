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
        Schema::create('jasa_peredams', function (Blueprint $table) {
            $table->id();
            $table->integer('jasa_peredam_dinding');
            $table->integer('jasa_peredam_plafon');
            $table->integer('survei_jabodetabek');
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
        Schema::dropIfExists('jasa_peredams');
    }
};
