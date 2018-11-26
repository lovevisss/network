<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateServersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('servers', function (Blueprint $table) {
            $table->increments('id');
            $table->ipAddress('ip')->unique();
            $table->integer('container_id')->nullable();  //机柜名
            $table->string('index')->nullable();       //机柜位置
            $table->integer('user_id')->nullable();      //使用人
            $table->string('model')->nullable();      //型号
            $table->string('os')->nullable();        //操作系统
            $table->string('desc')->nullable();      //描述
            $table->string('admin')->nullable();        //账号
            $table->string('password')->nullable();     //密码
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
        Schema::dropIfExists('servers');
    }
}
