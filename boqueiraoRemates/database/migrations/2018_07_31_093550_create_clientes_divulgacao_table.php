<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesDivulgacaoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_divulgacao', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('tel_comercial')->nullable();
            $table->string('tel_residencial')->nullable();
            $table->string('tel_celular')->nullable();
            $table->string('estabelecimento')->nullable();
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
        Schema::dropIfExists('clientes_divulgacao');
    }
}
