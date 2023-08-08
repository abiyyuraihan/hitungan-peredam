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
        Schema::create('harga_listriks', function (Blueprint $table) {
            $table->id();
            $table->integer('material_lampu');
            $table->integer('material_lampu_tembak');
            $table->integer('material_lampu_rgb');
            $table->integer('material_stopkontak');
            $table->integer('jasa_instalasi_listrik');
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
        Schema::dropIfExists('harga_listriks');
    }
};
