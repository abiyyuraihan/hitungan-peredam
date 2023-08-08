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
        Schema::create('harga_meeting_rooms', function (Blueprint $table) {
            $table->id();
            $table->integer('gypsum_standard_mr');
            $table->integer('gypsum_medium_mr');
            $table->integer('panel_standard_mr');
            $table->integer('panel_medium_mr');
            $table->integer('panel_high_mr');
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
        Schema::dropIfExists('harga_meeting_rooms');
    }
};
