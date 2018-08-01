@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h1>Novo Cliente Divulgação</h1>

    <ol class="breadcrumb">
        <li><a href="">Página Inicial</a></li>
        <li><a href="">Adicionar Cliente Divulgação</a></li>
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
    <form method="post" action="{{route ('clientes_divulgacao.store')}}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-mail</label>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" type="email" name="email" required>
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Endereço</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco">
                            </div>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" name="cidade">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Comercial</label>
                        <input type="text" class="form-control" placeholder="Telefone Comercial" name="tel_comercial">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Residencial</label>
                        <input type="text" class="form-control" placeholder="Telefone Residencial" name="tel_residencial">
                    </div>
                </div>    
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Celular</label>
                        <input type="text" class="form-control" placeholder="Telefone Celular" name="tel_celular">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Estabelecimento</label>
                        <input type="text" class="form-control" placeholder="Estabelecimento" name="estabelecimento" >
                    </div>
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