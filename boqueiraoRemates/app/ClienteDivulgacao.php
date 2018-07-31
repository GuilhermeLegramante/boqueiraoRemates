<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ClienteDivulgacao extends Model
{
    protected $fillable = [
        "nome", "email", "endereco", "cidade", "tel_comercial", 
        "tel_residencial", "tel_celular", "estabelecimento",
    ];

    protected $table = "clientes_divulgacao";
}
