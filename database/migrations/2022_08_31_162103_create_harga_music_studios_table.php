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
        Schema::create('harga_music_studios', function (Blueprint $table) {
            $table->id();
            $table->integer('gypsum_standard_ms');
            $table->integer('gypsum_medium_ms');
            $table->integer('gypsum_high_ms');
            $table->integer('panel_standard_ms');
            $table->integer('panel_medium_ms');
            $table->integer('panel_high_ms');
            $table->integer('panel_deluxe_ms');
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
        Schema::dropIfExists('harga_music_studios');
    }
};
