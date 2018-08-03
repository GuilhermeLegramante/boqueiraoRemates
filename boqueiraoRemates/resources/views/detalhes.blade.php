<!DOCTYPE html>
<html>
<page size="A4">
<head>
    <title>Dados do Cliente</title>
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
    padding-right: 25px;
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
</head>
<body>
    <table class="cabecalho">
        <tr>
            <td> Dados do Cliente: <b>{{$cliente->id}}</b> </td>
            <td> <img class="cabecalho" src="{{ url('storage/logo.png') }}" style="width: 40%" align="right"> </td>
        </tr>
        <tr>
            <h6>Data do cadastro: {{$cliente->created_at}}
        </tr>
    </table>
    <div>
        <h5> </h5>
    <div>
    <table id="customers">
        <tr>
            <td>Nome: <b>{{$cliente->nome}}</b></td>
            <td>Email: <b>{{$cliente->email}}</b></td>
        </tr>
        <tr>
            <td>CPF: <b>{{$cliente->cpf}}</b></td>
            <td>CNPJ: <b>{{$cliente->cnpj}}</b></td>
        </tr>
        <tr>
            <td>Nome da mãe: <b>{{$cliente->nome_mae}}</b></td>
            <td>Nome do pai: <b>{{$cliente->nome_pai}}</b></td>
        </tr>
        <tr> 
            <td>Data de nascimento: <b>{{$cliente->data_nasc}}</b></td>
            <td>RG: <b>{{$cliente->rg}}</b></td>
        </tr>
        <tr>
            <td>Endereço: <b>{{$cliente->endereco}}</b></td>
            <td>Complemento: <b>{{$cliente->complemento}}</b></td>
        </tr>
        <tr>    
            <td>Bairro: <b>{{$cliente->bairro}}</b></td>
            <td>CEP: <b>{{$cliente->cep}}</b></td>
        </tr>
        <tr>
            <td>Cidade: <b>{{$cliente->cidade}}</b></td>
            <td>UF: <b>{{$cliente->uf}}</b></td>
        </tr>
        <tr>
            <td>País: <b>{{$cliente->pais}}</b></td>
            <td>Telefone Comercial: <b>{{$cliente->tel_comercial}}</b></td>
        </tr>
        <tr>
            <td>Telefone Residencial: <b>{{$cliente->tel_residencial}}</b></td>
            <td>Telefone Celular: <b>{{$cliente->tel_celular}}</b></td>
        </tr>
        <tr>
            <td>Profissão: <b>{{$cliente->profissao}}</b></td>
            <td>Renda: <b>R${{$cliente->renda}},00</b></td>
        </tr>
        <tr>    
            <td width="50%">Estabelecimento: <b>{{$cliente->estabelecimento}}</b></td>
            <td><img src="{{ url('storage/logo_estabelecimento/'.$cliente->logo_estabelecimento) }}" align="middle" style="width: 40%"></td>
        </tr>
        <tr>
            <td>Habilitação: <b>{{$cliente->habilitacao}}</b></td>            
            <td>Leiloeiras que possui cadastro: <b>{{$cliente->leiloeiras}}</b></td>
        </tr>
    </table>
    <div>
        
    </div>
</body>
</page>
</html>
