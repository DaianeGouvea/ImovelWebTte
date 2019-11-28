<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImoveisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imoveis', function (Blueprint $table) {
            $table->increments('id');

            $table->string('endereco', 50);
            $table->string('bairro', 30);
            $table->string('cep', 10);
            $table->string('cidade', 50);
            $table->char('uf', 2);
            $table->float('valor_aluguel', 10, 2);
            $table->char('disponivel', 1)->default('S');
            $table->unsignedInteger('proprietarios_id');

            $table->timestamps();

            $table->foreign('proprietarios_id')->references('id')->on('proprietarios');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('imoveis');
    }
}
