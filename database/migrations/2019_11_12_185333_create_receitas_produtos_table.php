<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceitasProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receitas_produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedbigInteger('id_receita');
            $table->unsignedbigInteger('id_produto');
            $table->integer('quantidade');
            $table->foreign('id_receita')->references('id')->on('receitas')->onDelete('cascade');
            $table->foreign('id_produto')->references('id')->on('produtos')->onDelete('cascade');
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
        Schema::dropIfExists('receitas_produtos');
    }
}
