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
        Schema::create('pekerjaan_lantais', function (Blueprint $table) {
            $table->id();
            $table->integer('karpet_buanna');
            $table->integer('karpet_kantor');
            $table->integer('vinyl');
            $table->integer('parket_kayu');
            $table->integer('panggung');
            $table->integer('minibar');
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
        Schema::dropIfExists('pekerjaan_lantais');
    }
};
