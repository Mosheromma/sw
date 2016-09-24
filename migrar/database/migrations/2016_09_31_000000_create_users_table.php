<?php

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
            $table->string('name',50);
            $table->string('nachname1',50);
            $table->string('nachname2',50);
            $table->string('geburtstag',10);
            $table->string('email')->unique();
            $table->string('telefonnummer');
            $table->string('handynummer');
            $table->string('adresse');
            $table->string('postleizahl');
            $table->string('ort');
            $table->string('user_typ',1);
            $table->string('password', 60);
            $table->rememberToken();
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
        Schema::drop('users');
    }
}
