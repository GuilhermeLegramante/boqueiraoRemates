<?php

use Illuminate\Database\Seeder;
use App\Cliente;

class ClientesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cliente::create([
            'nome' => 'Guilherme Legramante Martins',
            'email' => 'guilhermelegramante@gmail.com',
            'cpf' => '01785929003',
            'cnpj' => '',
            'rg' => '7094746497',
            'nome_mae' => 'Ana Beatriz Legramante Martins',
            'nome_pai' => 'César Antônio Rodrigues Martins',
            'data_nasc' => '09/02/1988',
            'endereco' => 'Marechal Rondon n. 60',
            'complemento' => 'casa',
            'bairro' => 'São Vicente',
            'cep' => '9700-000',
            'cidade' => 'Santiago',
            'uf' => 'RS',
            'pais' => 'Brasil',
            'tel_comercial' => '',
            'tel_residencial' => '',
            'tel_celular' => '55 99918 1805',
            'banco' => 'Santander',
            'agencia' => '1040',
            'conta' => '01007856-0',
            'profissao' => 'militar',
            'renda' => '4000',
            'cadastro_leiloeiras' => 'nao',
            'leiloeiras' => '',
            'estabelecimento' => '',
            'ativo' => 'sim',         
        ]);
   

    }
}
