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
        Schema::create('penawaran_o_e_m_s', function (Blueprint $table) {
            $table->id();
            $table->string('mrType');
            $table->string('nama');
            $table->text('alamat');
            $table->string('foto1');
            $table->string('foto2');
            $table->string('foto3');
            $table->float('panjangStudio');
            $table->float('lebarStudio');
            $table->float('panjangOperator');
            $table->float('lebarOperator');
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
        Schema::dropIfExists('penawaran_o_e_m_s');
    }
};
