<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');                                     //ชื่อ
            $table->string('email')->unique();                          //เลขบัตร
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');                                 //pass
            $table->rememberToken();                                    
            $table->timestamps();
            $table->boolean('isAdmin')->nullable();                     //แอดมิน =1
            $table->string('surname')->nullable();                      //นามสกุล
            $table->string('store_name')->nullable();                   //ชื่อร้าน
            $table->string('tel')->nullable();                          //เบอร์โทร
            $table->string('lock')->nullable();                         //เลขล๊อค
            $table->string('ban')->nullable();                          // แบน =1
            $table->string('come')->nullable();                         // มา =1
            $table->string('count')->nullable();                         // นับการขาด

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
