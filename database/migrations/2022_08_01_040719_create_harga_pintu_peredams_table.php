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
        Schema::create('harga_pintu_peredams', function (Blueprint $table) {
            $table->id();
            $table->integer('tebal_4cm');
            $table->integer('tebal_7cm');
            $table->integer('jasa_pasang_pintu');
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
        Schema::dropIfExists('harga_pintu_peredams');
    }
};
