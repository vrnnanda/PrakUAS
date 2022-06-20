<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserdosenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userdosen', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('nik_user');
            $table->string('nama_user', 45);
            $table->string('no_hp', 45);
            $table->string('password', 45);
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
        Schema::dropIfExists('userdosen');
    }
}
