<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKundensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kundens', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('status');
            $table->string('art');
            $table->string('unt_name');
            $table->string('kontakt_name');
            $table->string('kontakt_nachname');
            $table->string('adresse');
            $table->string('ort');
            $table->string('post_zahl');
            $table->string('telf_numm');
            $table->string('handy_numm');
            $table->string('email');
            $table->string('zahlung_info');
            $table->text('komment');

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
        Schema::drop('kundens');
    }
}
