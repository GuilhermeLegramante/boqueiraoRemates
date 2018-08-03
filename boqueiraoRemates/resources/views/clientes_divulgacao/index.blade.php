@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h1>Clientes Cadastrados</h1>

    <ol class="breadcrumb">
        <li><a href="">Página Inicial</a></li>
        <li><a href="">Clientes Divulgação Cadastrados</a></li>
    </ol>
@stop

@section('content')

    <div class="panel panel-default">    
        <div class="panel-heading">Lista de Clientes Divulgação</div>
        <form method="GET" action="{{route('clientes_divulgacao.index', 'buscar' )}}">
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
                            <th>Estabelecimento</th>
                        </tr>
                    </thead>            
                    <tbody>            
                        @foreach($clientes_divulgacao as $clienteDivulgacao)
                            <tr>
                                <td>{{$clienteDivulgacao->nome}}</td>
                                <td>{{$clienteDivulgacao->email}}</td>
                                <td>{{$clienteDivulgacao->estabelecimento}}</td>
                                <td>
                                    <a href="{{route('clientes_divulgacao.show', $clienteDivulgacao->id)}}"><i class="glyphicon glyphicon-zoom-in"></i></a>
                                    <a href="{{route('clientes_divulgacao.edit', $clienteDivulgacao->id)}}"><i class="glyphicon glyphicon-pencil"></i></a>
                                    <a href="{{route('clientes_divulgacao.remove', $clienteDivulgacao->id)}}"><i class="glyphicon glyphicon-trash"></i></a>
                                </td>                                
                            </tr>                         
                        @endforeach                                
                    </tbody>
                </table> 
            </div> 
        </div>
    </div>

    <div align="center" class="row">
        {{ $clientes_divulgacao->links() }}
    </div>

    <div class="box-header with-border">
        <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
        <a href="{{route('clientes_divulgacao.create')}}"><button class="btn btn-primary">Adicionar</button></a>
    </div>

    

@stop