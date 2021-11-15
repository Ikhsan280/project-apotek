<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBKeluarTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('b_keluar', function (Blueprint $table) {
            $table->id();
            $table->integer('jumlah');
            $table->integer('kd_bm');
            $table->BigInteger('barang_id')->unsigned();
            $table->integer('jmlh');
            $table->integer('kode_trans');
            $table->string('user');

            $table->foreign("barang_id")->references('id')
                ->on('barang')->onUpdate('cascade')
                ->onDelete('cascade');
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
        Schema::dropIfExists('b_keluar');
    }
}
