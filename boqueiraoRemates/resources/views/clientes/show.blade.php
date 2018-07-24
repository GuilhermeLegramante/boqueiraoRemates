@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h3>Dados do Cliente </h3>
@stop

@section('content')
<div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Detalhes</h3>
        </div>
    <form method="post" action="">
        {{ csrf_field() }}

        <div class="box-body">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" required value="{{$cliente->nome}}" disabled="">
                            </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>E-mail</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span> 
                                <input class="form-control" placeholder="E-mail" type="email" name="email" required value="{{$cliente->email}}" disabled="">
                            </div> 
                    </div>
                </div>
            </div>



            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="CPF" name="cpf" value="{{$cliente->cpf}}" disabled="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>CNPJ</label>
                        <input type="text" class="form-control" placeholder="CNPJ" name="cnpj" value="{{$cliente->cnpj}}" disabled="">
                    </div>
                </div>
            </div>  



            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>RG</label>
                        <input type="text" class="form-control" placeholder="RG" name="rg" required value="{{$cliente->rg}}" disabled="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome da mãe</label>
                        <input type="text" class="form-control" placeholder="Nome da mãe" name="nome_mae" value="{{$cliente->nome_mae}}" disabled="">
                    </div>
                </div>
            </div>  

        
  
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Nome do pai</label>
                        <input type="text" class="form-control" placeholder="Nome do pai" name="nome_pai" value="{{$cliente->nome_pai}}" disabled="">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-birthday-cake"></i></span>
                                <input type="text" class="form-control" placeholder="Data de Nascimento" name="data_nasc" value="{{$cliente->data_nasc}}" disabled="">
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
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco" required value="{{$cliente->endereco}}" disabled="">
                            </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <label>Complemento</label>
                        <input type="text" class="form-control" placeholder="Complemento" name="complemento" value="{{$cliente->complemento}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairro" value="{{$cliente->bairro}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" name="cep" required value="{{$cliente->cep}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" name="cidade" required value="{{$cliente->cidade}}" disabled="">
                    </div>
                </div>   
                <div class="col-md-6">
                    <div class="form-group">
                        <label>UF</label>
                        <input type="text" class="form-control" placeholder="UF" name="uf" required value="{{$cliente->uf}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>País</label>
                        <input type="text" class="form-control" placeholder="País" name="pais" value="{{$cliente->pais}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Comercial</label>
                        <input type="text" class="form-control" placeholder="Telefone Comercial" name="tel_comercial" required value="{{$cliente->tel_comercial}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Residencial</label>
                        <input type="text" class="form-control" placeholder="Telefone Residencial" name="tel_residencial" value="{{$cliente->tel_residencial}}" disabled="">
                    </div>
                </div>    
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Telefone Celular</label>
                        <input type="text" class="form-control" placeholder="Telefone Celular" name="tel_celular" required value="{{$cliente->tel_celular}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Banco</label>
                        <input type="text" class="form-control" placeholder="Banco" name="banco" required value="{{$cliente->banco}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Agência</label>
                        <input type="text" class="form-control" placeholder="Agência" name="agencia" required value="{{$cliente->agencia}}" disabled="">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Conta Corrente</label>
                        <input type="text" class="form-control" placeholder="Conta Corrente" name="conta" required value="{{$cliente->conta}}" disabled="">
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Profissão</label>
                        <input type="text" class="form-control" placeholder="Profissão" name="profissao" required value="{{$cliente->profissao}}" disabled="">
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cadastro em outras leiloeiras</label>
                        <select class="form-control" name="cadastro_leiloeiras" required value="{{$cliente->cadastro_leiloeiras}}" disabled="">
                            <option>Não</option>
                            <option>Sim</option>
                        </select>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Leiloeiras que possui cadastro</label>
                        <input type="text" class="form-control" placeholder="Leiloeiras" name="leiloeiras" value="{{$cliente->leiloeiras}}" disabled="">
                    </div>
                </div>  
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Renda</label>
                            <div class="input-group">
                                <span class="input-group-addon">$</span>
                                    <input type="text" class="form-control" placeholder="Renda" name="renda" required value="{{$cliente->renda}}" disabled=""> 
                                    <span class="input-group-addon">.00</span>
                            </div>
                    </div>
                </div> 
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Estabelecimento</label>
                        <input type="text" class="form-control" placeholder="Estabelecimento" name="estabelecimento" required value="{{$cliente->estabelecimento}}" disabled="">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label>Cliente Ativo</label>
                        <select class="form-control" name="ativo" required value="{{$cliente->ativo}}" disabled="">
                            <option>Sim</option>
                            <option>Não</option>    
                        </select>
                    </div>
                </div>

            </div>  

        <div class="box-header with-border">
            <a href="{{ url()->previous() }}" class="btn btn-default">Voltar</a>
            <a href="{{route('pdf')}}" class="btn btn-default">PDF</a>
            <a href="{{route('clientes.create')}}"><button class="btn btn-primary">Adicionar</button></a>
        </div>


@stop