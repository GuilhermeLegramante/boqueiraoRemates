<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    protected $fillable = [
        "nome", "email", "cpf", "cnpj", "rg", "nome_pai", "nome_mae", "data_nasc",
        "endereco", "complemento", "bairro", "cep", "cidade", "uf", "pais", "tel_comercial",
        "tel_residencial", "tel_celular", "banco", "agencia", "conta", "profissao", "renda",
        "cadastro_leiloeiras", "leiloeiras", "estabelecimento", "ativo"
    ];

    protected $table = "clientes";
}
