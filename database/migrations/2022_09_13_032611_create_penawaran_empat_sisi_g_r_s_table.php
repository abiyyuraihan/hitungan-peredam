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
        Schema::create('penawaran_empat_sisi_g_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('mrType');
            $table->string('nama');
            $table->text('alamat');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->float('panjang');
            $table->float('lebar');
            $table->float('tinggi');
            $table->integer('pintu');
            $table->integer('mobilisasi');
            $table->integer('dropMaterial');
            $table->integer('sampah');
            $table->integer('transport');
            $table->integer('mess');
            $table->integer('tiket');
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
        Schema::dropIfExists('penawaran_empat_sisi_g_r_s');
    }
};
