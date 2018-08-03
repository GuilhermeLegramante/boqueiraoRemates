<!DOCTYPE html>
<html>
<style type="text/css">
    body {
    background: rgb(204,204,204); 
    }
    page {
    background: white;
    display: block;
    margin: 0 auto;
    margin-bottom: 0.5cm;
    box-shadow: 0 0 0.5cm rgba(0,0,0,0.5);
    padding-top: 20px;
    padding-right: 20px;
    padding-bottom: 20px;
    padding-left: 20px;
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    }
    page[size="A4"] {  
    width: 21cm;
    height: 29.7cm; 
    }
    img.cabecalho{
        align: right;
    }
    table.cabecalho{
        background: rgb(194, 194, 163);
        padding-left: 8px;
        padding-right: 8px;
        width: 100%;  
        font-family: "Calibri", Arial, Helvetica, sans-serif;
    }
    #customers {
    font-family: "Calibri", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
    }

    #customers td, #customers th {
        border: 1px solid #ddd;
        padding: 8px;
    }

    #customers tr:nth-child(even){background-color: #f2f2f2;}

    #customers tr:hover {background-color: #ddd;}

    #customers th {
        padding-top: 12px;
        padding-bottom: 12px;
        text-align: left;
        background-color: #4CAF50;
        color: white;
    }
    .footer {
    position:absolute;
    bottom:0;
    width:100%;
    }

</style>
<page size="A4">
<head>
    <title>Dados do Cliente</title>
        <table class="cabecalho">
            <tr>
                <td> Dados do Cliente: <b>{{$cliente->id}}</b> </td>
                <td> <img class="cabecalho" src="{{ url('storage/logo.png') }}" style="width: 40%" align="right"> </td>
            </tr>
            <tr>
                <h6>Data do cadastro: {{$cliente->created_at}} </h6>
            </tr>
        </table>
</head>
<body>
    <div>
        <h5> </h5>
    <div>
    <table id="customers">
        <tr>
            <td>Nome: <b>{{$cliente->nome}}</b></td>
            <td>Email: <b>{{$cliente->email}}</b></td>
        </tr>
        <tr>
            @if ($cliente->cpf !=null)
            <td>CPF: <b>{{$cliente->cpf}}</b></td>
            @endif
            @if ($cliente->cnpj !=null )
            <td>CNPJ: <b>{{$cliente->cnpj}}</b></td>
            @endif
        </tr>
        <tr>
            @if ($cliente->nome_mae !=null)
            <td>Nome da mãe: <b>{{$cliente->nome_mae}}</b></td>
            @endif
            @if ($cliente->nome_pai !=null )
            <td>Nome do pai: <b>{{$cliente->nome_pai}}</b></td>
            @endif
        </tr>
        <tr> 
            @if ($cliente->data_nasc !=null)
            <td>Data de nascimento: <b>{{$cliente->data_nasc}}</b></td>
            @endif
            @if ($cliente->rg !=null )
            <td>RG: <b>{{$cliente->rg}}</b></td>
            @endif  
        </tr>
        <tr>
            @if ($cliente->endereco !=null)
            <td>Endereço: <b>{{$cliente->endereco}}</b></td>
            @endif
            @if ($cliente->complemento !=null )
            <td>Complemento: <b>{{$cliente->complemento}}</b></td>
            @endif
        </tr>
        <tr>    
            @if ($cliente->bairro !=null)
            <td>Bairro: <b>{{$cliente->bairro}}</b></td>
            @endif
            @if ($cliente->cep !=null)
            <td>CEP: <b>{{$cliente->cep}}</b></td>
            @endif
        </tr>
        <tr>
            @if ($cliente->cidade !=null )
            <td>Cidade: <b>{{$cliente->cidade}}</b></td>
            @endif    
            @if ($cliente->uf !=null)
            <td>UF: <b>{{$cliente->uf}}</b></td>
            @endif

        </tr>
        <tr>
            @if ($cliente->pais !=null)
            <td>País: <b>{{$cliente->pais}}</b></td>
            @endif
            @if ($cliente->tel_comercial !=null)
            <td>Telefone Comercial: <b>{{$cliente->tel_comercial}}</b></td>
            @endif
        </tr>
        <tr>
            @if ($cliente->tel_residencial !=null)
            <td>Telefone Residencial: <b>{{$cliente->tel_residencial}}</b></td>
            @endif
            @if ($cliente->tel_celular !=null)
            <td>Telefone Celular: <b>{{$cliente->tel_celular}}</b></td>
            @endif
        </tr>
        <tr>
            @if ($cliente->profissao !=null)
            <td>Profissão: <b>{{$cliente->profissao}}</b></td>
            @endif
            @if ($cliente->renda !=null )
            <td>Renda: <b>R${{$cliente->renda}},00</b></td>
            @endif
        </tr>
        <tr>    
            @if ($cliente->estabelecimento !=null)
            <td width="50%">Estabelecimento: <b>{{$cliente->estabelecimento}}</b></td>
            @endif
            @if ($cliente->logo_estabelecimento !=null)
            <td><img src="{{ url('storage/logo_estabelecimento/'.$cliente->logo_estabelecimento) }}" align="middle" style="width: 40%"></td>
            @endif
        </tr>
        <tr>
            @if ($cliente->habilitacao !=null)
            <td>Habilitação: <b>{{$cliente->habilitacao}}</b></td>
            @endif
            @if ($cliente->leiloeiras !=null)
            <td>Leiloeiras que possui cadastro: <b>{{$cliente->leiloeiras}}</b></td>
            @endif
        </tr>
    </table>
    <div>
        
    </div>
</body>
</page>
</html>
