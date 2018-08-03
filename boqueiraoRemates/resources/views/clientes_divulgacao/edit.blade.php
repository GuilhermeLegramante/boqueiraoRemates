@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h1>Editar Cliente Divulgação</h1>

    <ol class="breadcrumb">
        <li><a href="">Página Inicial</a></li>
        <li><a href="">Editar Cliente Divulgação</a></li>
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
    <form method="post" action="{{route ('clientes_divulgacao.update', $cliente_divulgacao->id)}}" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" value="{{$cliente_divulgacao->nome}}" >
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-mail</label>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" type="email" name="email" value="{{$cliente_divulgacao->email}}" >
                            </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Endereço</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco" value="{{$cliente_divulgacao->endereco}}" >
                            </div>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="{{$cliente_divulgacao->cidade}}" >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Comercial</label>
                        <input type="text" class="form-control" placeholder="Telefone Comercial" name="tel_comercial" value="{{$cliente_divulgacao->tel_comercial}}" >
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Residencial</label>
                        <input type="text" class="form-control" placeholder="Telefone Residencial" name="tel_residencial" value="{{$cliente_divulgacao->tel_residencial}}" >
                    </div>
                </div>    
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Celular</label>
                        <input type="text" class="form-control" placeholder="Telefone Celular" name="tel_celular" value="{{$cliente_divulgacao->tel_celular}}" >
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Estabelecimento</label>
                        <input type="text" class="form-control" placeholder="Estabelecimento" name="estabelecimento" value="{{$cliente_divulgacao->estabelecimento}}" >
                    </div>
                </div>
            </div>  
        </div> 

        
        <div class="box-header with-border">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
            <button type="submit" class="btn btn-success">Salvar as alterações</button>
        </div>
       
        </form>

    </div>



@stop