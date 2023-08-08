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
        Schema::create('harga_karaoke_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('gypsum_standard_kr');
            $table->integer('gypsum_medium_kr');
            $table->integer('gypsum_high_kr');
            $table->integer('panel_standard_kr');
            $table->integer('panel_medium_kr');
            $table->integer('panel_high_kr');
            $table->integer('panel_deluxe_kr');
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
        Schema::dropIfExists('harga_karaoke_rooms');
    }
};
