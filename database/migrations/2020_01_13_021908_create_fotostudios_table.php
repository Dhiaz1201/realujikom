<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFotostudiosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fotostudios', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('kode_pelanggan');
            $table->string('nama');
            $table->string('alamat');
            $table->integer('number');
            $table->string('cetak_ukuran');
            $table->date('tanggal_cetak');
            $table->date('tanggal_ambil');
            $table->string('jenis');
            $table->string('foto');
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
        Schema::dropIfExists('fotostudios');
    }
}
