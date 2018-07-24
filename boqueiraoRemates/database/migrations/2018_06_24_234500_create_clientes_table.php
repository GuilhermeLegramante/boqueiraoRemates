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
            $table->string('cnpj')->nullable()->unique();
            $table->string('rg')->nullable();
            $table->string('nome_mae')->nullable();
            $table->string('nome_pai')->nullable();
            $table->string('data_nasc')->nullable();
            $table->string('endereco')->nullable();
            $table->string('complemento')->nullable();
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('cidade')->nullable();
            $table->string('uf')->nullable();
            $table->string('pais')->nullable();
            $table->string('tel_comercial')->nullable();
            $table->string('tel_residencial')->nullable();
            $table->string('tel_celular')->nullable();
            $table->string('banco')->nullable();
            $table->string('agencia')->nullable();
            $table->string('conta')->nullable();
            $table->string('profissao')->nullable();
            $table->float('renda')->nullable();
            $table->enum('cadastro_leiloeiras', ['Sim', 'Não'])->nullable();
            $table->string('leiloeiras')->nullable();
            $table->string('estabelecimento')->nullable();
            $table->enum('habilitacao', ['Habilitado', 'Bloqueado'])->nullable();
            $table->string('scan_rg_cpf_cnh')->nullable();
            $table->string('scan_comprovante_endereco')->nullable();
            $table->string('scan_negativas')->nullable();
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
