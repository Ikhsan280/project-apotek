<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('d_users', function (Blueprint $table) {
            $table->id();
            $table->integer('name');
            $table->integer('email');
            $table->integer('alamat');
            $table->integer('telepon');
            $table->integer('foto');
            $table->integer('super_admin');
            $table->integer('user_id');
            $table->integer('supplier');
            $table->integer('member');
            $table->integer('password');
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
        Schema::dropIfExists('d_users');
    }
}
