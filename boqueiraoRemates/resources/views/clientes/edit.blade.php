@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h1>Novo cliente </h1>

    <ol class="breadcrumb">
        <li><a href="">Página Inicial</a></li>
        <li><a href="">Editar Cliente</a></li>
    </ol>
@stop

@section('content')

@if($errors->any())
    <div class="alert alert-danger" role="alert">
        @foreach ($errors->all() as $error)
             {{ $error }}<br>
        @endforeach
    /div>
@endif

<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Dados</h3>
        </div>
    <form method="post" action="{{route ('clientes.update', $cliente->id)}}">
    <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" required value="{{$cliente->nome}}">
                            </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="E-mail" type="email" name="email" required value="{{$cliente->email}}">
                            </div>
                    </div>
                </div>
            </div>

        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="CPF" name="cpf" pattern="\d{3}\.\d{3}\.\d{3}-\d{2}" title="Por favor, digite o CPF no formato 000.000.000-00" value="{{$cliente->cpf}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>CNPJ</label>
                        <input type="text" class="form-control" placeholder="CNPJ" name="cnpj" title="Por favor, digite o CNPJ no formato 00.000.000/0000-00" value="{{$cliente->cnpj}}">
                    </div>
                </div>
            </div>  



            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>RG</label>
                        <input type="text" class="form-control" placeholder="RG" name="rg" required value="{{$cliente->rg}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome da mãe</label>
                        <input type="text" class="form-control" placeholder="Nome da mãe" name="nome_mae" value="{{$cliente->nome_mae}}">
                    </div>
                </div>
            </div>  
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome do pai</label>
                        <input type="text" class="form-control" placeholder="Nome do pai" name="nome_pai" value="{{$cliente->nome_pai}}">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                                <input type="text" class="form-control" placeholder="Data de Nascimento" name="data_nasc" pattern="\d{2}\/\d{2}\/\d{4}" title="Por favor, digite a Data de Nascimento no formato dd/mm/YYYY" required value="{{$cliente->data_nasc}}">
                            </div>
                    </div>
                </div>
            </div>  

            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Endereço</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-home"></i></span>
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco" required value="{{$cliente->endereco}}">
                            </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Complemento</label>
                        <input type="text" class="form-control" placeholder="Complemento" name="complemento" value="{{$cliente->complemento}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairro" value="{{$cliente->bairro}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" name="cep" required value="{{$cliente->cep}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" name="cidade" required value="{{$cliente->cidade}}">
                    </div>
                </div>   
                <div class="col-md-6">
                    <div class="form-group">
                        <label>UF</label>
                        <input type="text" class="form-control" placeholder="UF" name="uf" required value="{{$cliente->uf}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>País</label>
                        <input type="text" class="form-control" placeholder="País" name="pais" required value="{{$cliente->pais}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Comercial</label>
                        <input type="text" class="form-control" placeholder="Telefone Comercial" name="tel_comercial"required value="{{$cliente->tel_comercial}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Residencial</label>
                        <input type="text" class="form-control" placeholder="Telefone Residencial" name="tel_residencial" value="{{$cliente->tel_residencial}}">
                    </div>
                </div>    
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Celular</label>
                        <input type="text" class="form-control" placeholder="Telefone Celular" name="tel_celular" required value="{{$cliente->tel_celular}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Banco</label>
                        <input type="text" class="form-control" placeholder="Banco" name="banco" required value="{{$cliente->banco}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Agência</label>
                        <input type="text" class="form-control" placeholder="Agência" name="agencia" required value="{{$cliente->agencia}}">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Conta Corrente</label>
                        <input type="text" class="form-control" placeholder="Conta Corrente" name="conta" required value="{{$cliente->conta}}">
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Profissão</label>
                        <input type="text" class="form-control" placeholder="Profissão" name="profissao" required value="{{$cliente->profissao}}">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cadastro em outras leiloeiras</label>
                        <select class="form-control" name="cadastro_leiloeiras" required value="{{$cliente->cadastro_leiloeiras}}">
                            <option>Não</option>
                            <option>Sim</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Leiloeiras que possui cadastro</label>
                        <input type="text" class="form-control" placeholder="Leiloeiras" name="leiloeiras" value="{{$cliente->leiloeiras}}">
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Renda</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" placeholder="Renda" name="renda" required value="{{$cliente->renda}}">
                                    <span class="input-group-addon">.00</span>
                            </div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Estabelecimento</label>
                        <input type="text" class="form-control" placeholder="Estabelecimento" name="estabelecimento" required value="{{$cliente->estabelecimento}}">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cliente Ativo</label>
                        <select class="form-control" name="ativo" required value="{{$cliente->ativo}}">
                            <option>Sim</option>
                            <option>Não</option>    
                        </select>
                    </div>
                </div>

        </div> 

        
        <div class="box-header with-border">
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Salvar</button>
        </div>
       
        </form>

    </div>

@stop