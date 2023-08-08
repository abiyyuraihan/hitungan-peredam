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
        Schema::create('penawaran_lima_sisi_m_r_s', function (Blueprint $table) {
            $table->id();
            $table->string('mrType');
            $table->string('nama');
            $table->text('alamat');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->float('dindingSatu');
            $table->float('dindingDua');
            $table->float('dindingTiga');
            $table->float('dindingEmpat');
            $table->float('dindingLima');
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
        Schema::dropIfExists('penawaran_lima_sisi_m_r_s');
    }
};
