<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('numero');
            $table->integer('valor');
            $table->unsignedbigInteger('id_pessoa');
            $table->unsignedbigInteger('id_cultura');
            $table->foreign('id_pessoa')->references('id')->on('pessoas')->onDelete('cascade');
            $table->foreign('id_cultura')->references('id')->on('culturas')->onDelete('cascade');
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
        Schema::dropIfExists('receitas');
    }
}
