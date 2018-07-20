@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h1>Novo cliente </h1>

    <ol class="breadcrumb">
        <li><a href="">Página Inicial</a></li>
        <li><a href="">Adicionar Cliente</a></li>
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

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
 
@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Dados</h3>
        </div>
    <form method="post" action="{{route ('clientes.store')}}">
        {{ csrf_field() }}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                            </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input class="form-control" placeholder="E-mail" type="email" name="email" required>
                            </div>
                    </div>
                </div>
            </div>

        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="CPF" name="cpf">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>CNPJ</label>
                        <input type="text" class="form-control" placeholder="CNPJ" name="cnpj" title="Por favor, digite o CNPJ no formato 00.000.000/0000-00">
                    </div>
                </div>
            </div>  



            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>RG</label>
                        <input type="text" class="form-control" placeholder="RG" name="rg" required>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome da mãe</label>
                        <input type="text" class="form-control" placeholder="Nome da mãe" name="nome_mae">
                    </div>
                </div>
            </div>  
        
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome do pai</label>
                        <input type="text" class="form-control" placeholder="Nome do pai" name="nome_pai">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                                <input type="text" class="form-control" placeholder="Data de Nascimento" name="data_nasc" pattern="\d{2}\/\d{2}\/\d{4}" title="Por favor, digite a Data de Nascimento no formato dd/mm/YYYY" required>
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
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco" required>
                            </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Complemento</label>
                        <input type="text" class="form-control" placeholder="Complemento" name="complemento">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairro">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" name="cep" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" name="cidade" required>
                    </div>
                </div>   
                <div class="col-md-6">
                    <div class="form-group">
                        <label>UF</label>
                        <input type="text" class="form-control" placeholder="UF" name="uf" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>País</label>
                        <input type="text" class="form-control" placeholder="País" name="pais" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Comercial</label>
                        <input type="text" class="form-control" placeholder="Telefone Comercial" name="tel_comercial"required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Residencial</label>
                        <input type="text" class="form-control" placeholder="Telefone Residencial" name="tel_residencial">
                    </div>
                </div>    
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Celular</label>
                        <input type="text" class="form-control" placeholder="Telefone Celular" name="tel_celular" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Banco</label>
                        <input type="text" class="form-control" placeholder="Banco" name="banco" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Agência</label>
                        <input type="text" class="form-control" placeholder="Agência" name="agencia" required>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Conta Corrente</label>
                        <input type="text" class="form-control" placeholder="Conta Corrente" name="conta" required>
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Profissão</label>
                        <input type="text" class="form-control" placeholder="Profissão" name="profissao" required>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cadastro em outras leiloeiras</label>
                        <select class="form-control" name="cadastro_leiloeiras" required>
                            <option>Não</option>
                            <option>Sim</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Leiloeiras que possui cadastro</label>
                        <input type="text" class="form-control" placeholder="Leiloeiras" name="leiloeiras">
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Renda</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" placeholder="Renda" name="renda" required>
                                    <span class="input-group-addon">.00</span>
                            </div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Estabelecimento</label>
                        <input type="text" class="form-control" placeholder="Estabelecimento" name="estabelecimento" required>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cliente Ativo</label>
                        <select class="form-control" name="ativo" required>
                            <option>Sim</option>
                            <option>Não</option>    
                        </select>
                    </div>
                </div>

        </div> 

        
        <div class="box-header with-border">
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <button type="submit" class="btn btn-success"><span class="fa fa-save"></span> Cadastrar</button>
        </div>
       
        </form>

    </div>



@stop