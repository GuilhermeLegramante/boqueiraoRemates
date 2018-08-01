@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h1>Clientes Cadastrados</h1>

    <ol class="breadcrumb">
        <li><a href="">Página Inicial</a></li>
        <li><a href="">Clientes Cadastrados</a></li>
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

    <div class="panel panel-default">    
        <form method="GET" action="{{route('clientes.index', 'buscar' )}}">
        <div class="row">
            <div class="col-md-12">
                <div class="input-group">
                    <input type="text" class="form-control" placeholder="Digite o nome do cliente" name="buscar">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">Pesquisar</button>
                    </span>
                </div>
            </div>
        </div>
        </form>
        <div class="row">
            <div class="col-md-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>E-mail</th>
                            <th>Telefone</th>
                            <th>Estabelecimento</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->email}}</td>
                                <td>{{$cliente->tel_celular}}</td>
                                <td>{{$cliente->estabelecimento}}</td>
                                <td class="text-center">
                                    <a href="{{route('clientes.show', $cliente->id)}}"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                    <a href="{{route('clientes.edit', $cliente->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{route('pdf')}}" class="glyphicon glyphicon-save"></a>
                                    <a href="{{route('clientes.remove', $cliente->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>                                
                            </tr>                         
                        @endforeach                                
                    </tbody>
                </table> 
            </div> 
        </div>
    </div>

    <div align="center" class="row">
        {{ $clientes->links() }}
    </div>

    <div class="box-header with-border">
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        <a href="{{route('clientes.create')}}"><button class="btn btn-primary">Adicionar</button></a>
    </div>
    
@stop