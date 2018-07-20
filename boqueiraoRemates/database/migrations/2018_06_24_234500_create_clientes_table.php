<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('email');
            $table->string('cpf')->nullable()->unique();
            $table->string('cnpj')->nullable();
            $table->string('rg');
            $table->string('nome_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('data_nasc');
            $table->string('endereco');
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep');
            $table->string('cidade');
            $table->string('uf');
            $table->string('pais');
            $table->string('tel_comercial');
            $table->string('tel_residencial')->nullable();
            $table->string('tel_celular');
            $table->string('banco');
            $table->string('agencia');
            $table->string('conta');
            $table->string('profissao');
            $table->float('renda');
            $table->enum('cadastro_leiloeiras', ['Sim', 'Não']);
            $table->string('leiloeiras')->nullable();
            $table->string('estabelecimento');
            $table->enum('ativo', ['Sim', 'Não']);
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
        Schema::dropIfExists('clientes');
    }
}
