<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBarangTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('barang', function (Blueprint $table) {
            $table->id();
            $table->integer('kd_barang');
            $table->integer('jumlah');
            $table->integer('harga_beli');
            $table->integer('harga_jual');
            $table->bigInteger('kategori_id')->unsigned();
            $table->string('gambar');

            $table->foreign("kategori_id")->references('id')
            ->on('kategori')->onUpdate('cascade')
            ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('barang');
    }
}
