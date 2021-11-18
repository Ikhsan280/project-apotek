<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBMasukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_masuk', function (Blueprint $table) {
            $table->id();
            $table->integer('kode_bm');
            $table->bigInteger('barang_id')->unsigned();
            $table->string('keterangan');
            $table->integer('jumlah');
            $table->integer('harga_total');
            $table->bigInteger('user_id')->unsigned();
            $table->string('supplier');


            $table->foreign("barang_id")->references('id')
            ->on('barangs')->onUpdate('cascade')
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
        Schema::dropIfExists('b_masuk');
    }
}
