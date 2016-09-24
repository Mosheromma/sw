<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMitarbeitersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mitarbeiters', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('status');
            $table->string('name');
            $table->string('nachname');
            $table->string('geschlecht');
            $table->string('adresse');
            $table->string('ort');
            $table->string('post_zahl');
            $table->string('telf_numm');
            $table->string('handy_numm');
            $table->string('email');
            $table->string('vertrags_art');
            $table->string('vertrags_beginn');
            $table->string('vertrags_ablauf');

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
        Schema::drop('mitarbeiters');
    }
}
