@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h3>Remover o Cliente </h3>

    <ol class="breadcrumb">
        <li><a href="">Página Inicial</a></li>
        <li><a href="">Remover Cliente</a></li>
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
          <h3 class="box-title">Detalhes</h3>
        </div>
        <form method="post" action="{{route ('clientes.destroy', $cliente->id)}}">
        <input type="hidden" name="_method" value="DELETE">
        {{ csrf_field() }}

        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" required value="{{$cliente->nome}}" disabled="">
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>E-mail</label>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" type="email" name="email" required value="{{$cliente->email}}" disabled="">
                            </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="CPF" name="cpf" value="{{$cliente->cpf}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>CNPJ</label>
                        <input type="text" class="form-control" placeholder="CNPJ" name="cnpj" value="{{$cliente->cnpj}}" disabled="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nome da mãe</label>
                        <input type="text" class="form-control" placeholder="Nome da mãe" name="nome_mae" value="{{$cliente->nome_mae}}" disabled="">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nome do pai</label>
                        <input type="text" class="form-control" placeholder="Nome do pai" name="nome_pai" value="{{$cliente->nome_pai}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Data de Nascimento" name="data_nasc" value="{{$cliente->data_nasc}}" disabled="">
                            </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>RG</label>
                        <input type="text" class="form-control" placeholder="RG" name="rg" value="{{$cliente->rg}}" disabled="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Endereço</label>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Endereço" name="endereco" value="{{$cliente->endereco}}" disabled="">
                            </div>
                        </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Complemento</label>
                        <input type="text" class="form-control" placeholder="Complemento" name="complemento" value="{{$cliente->complemento}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairro" value="{{$cliente->bairro}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" name="cep" value="{{$cliente->cep}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" name="cidade" value="{{$cliente->cidade}}" disabled="">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label>UF</label>
                        <select class="form-control" name="uf" value="{{$cliente->uf}}" disabled="">
                            <option>RS</option>
                            <option>SC</option> 
                            <option>PR</option>
                            <option>MG</option> 
                            <option>SP</option>  
                            <option>RJ</option>
                            <option>ES</option>
                            <option>MT</option>
                            <option>MS</option>
                            <option>GO</option>
                            <option>DF</option>
                            <option>AC</option>
                            <option>AL</option>
                            <option>AP</option>
                            <option>AM</option>
                            <option>BA</option>
                            <option>CE</option>
                            <option>MA</option>
                            <option>PA</option>
                            <option>PB</option>
                            <option>PE</option>
                            <option>PI</option>
                            <option>RJ</option>
                            <option>RN</option>
                            <option>RO</option>
                            <option>RR</option>
                            <option>SE</option>
                            <option>TO</option>

                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>País</label>
                        <select class="form-control" name="pais" value="{{$cliente->pais}}" disabled="">
                            <option>Brasil</option>
                            <option>Argentina</option> 
                            <option>Uruguai</option>
                            <option>Paraguai</option>   
                        </select>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Comercial</label>
                        <input type="text" class="form-control" placeholder="Telefone Comercial" name="tel_comercial" value="{{$cliente->tel_comercial}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Residencial</label>
                        <input type="text" class="form-control" placeholder="Telefone Residencial" name="tel_residencial" value="{{$cliente->tel_residencial}}" disabled="">
                    </div>
                </div>    
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Telefone Celular</label>
                        <input type="text" class="form-control" placeholder="Telefone Celular" name="tel_celular" value="{{$cliente->tel_celular}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Banco</label>
                        <input type="text" class="form-control" placeholder="Banco" name="banco" value="{{$cliente->banco}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Agência</label>
                        <input type="text" class="form-control" placeholder="Agência" name="agencia" value="{{$cliente->agencia}}" disabled="">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Conta Corrente</label>
                        <input type="text" class="form-control" placeholder="Conta Corrente" name="conta" value="{{$cliente->conta}}" disabled="">
                    </div>
                </div> 
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Profissão</label>
                        <input type="text" class="form-control" placeholder="Profissão" name="profissao" value="{{$cliente->profissao}}" disabled="">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Renda</label>
                            <div class="input-group">
                                <span class="input-group-addon">R$</span>
                                    <input type="text" class="form-control" placeholder="Renda" name="renda" value="{{$cliente->renda}}" disabled="">
                                    <span class="input-group-addon">,00</span>
                            </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Estabelecimento</label>
                        <input type="text" class="form-control" placeholder="Estabelecimento" name="estabelecimento" value="{{$cliente->estabelecimento}}" disabled="">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Habilitação</label>
                        <select class="form-control" name="habilitacao" value="{{$cliente->habilitacao}}" disabled="">
                            <option>Habilitado</option>
                            <option>Bloqueado</option>    
                        </select>
                    </div>
                </div>
            </div>

             <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Cadastro em outras leiloeiras</label>
                        <select class="form-control" name="cadastro_leiloeiras" id="cadastro_leiloeiras" value="{{$cliente->cadastro_leiloeiras}}" disabled="">
                            <option>Sim</option>
                            <option>Não</option>    
                        </select>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="form-group">
                        <label>Leiloeiras que possui cadastro</label>
                        <textarea class="form-control" rows="3" placeholder="Leiloeiras..." name="leiloeiras" id="leiloeiras" value="{{$cliente->leiloeiras}}" disabled=""></textarea>
                    </div>
                </div> 
                <div class="col-md-4">
                <label> Logo do Estabelecimento </label>
                    <div class="form-group"> 
                        @if ($cliente->logo_estabelecimento == null )
                            <label>
                                <h5>Nenhuma logo do estabelecimento cadastrada.</h5>
                            </label>
                        @else
                            <a href="{{ url('storage/logo_estabelecimento/'.$cliente->logo_estabelecimento) }}" disabled="">Logo Estabelecimento</a>
                        @endif  
                        <div class="form-group">
                            <label>Upload Logo Estabelecimento</label>
                            <input type="file" value="Procurar" class="form-control" placeholder="Upload Logo Estabelecimento" name="logo_estabelecimento" disabled="">
                        </div>
                    </div>
                </div>
            </div>
            <label> Documentos</label>
            <div class="row">
            
            <div class="col-md-4">
                <div class="form-group"> 
                    @if ($cliente->scan_rg_cpf_cnh == null )
                        <label>
                            <h5>Nenhum documento (rg, cpf ou cnh) cadastrado</h5>
                        </label>
                    @else
                        <a href="{{ url('storage/rg_cpf_cnh_clientes/'.$cliente->scan_rg_cpf_cnh) }}">RG, CPF ou CNH</a>
                    @endif  
                    

                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    @if ($cliente->scan_comprovante_endereco == null)
                        <label>
                            <h5>Nenhum documento (comprovante de endereço) cadastrado</h5>
                        </label>
                    @else
                        <a href="{{ url('storage/comprovante_endereco_clientes/'.$cliente->scan_comprovante_endereco) }}">Comprovante de Endereço</a>
                    @endif
                    

                </div>
            </div> 
            <div class="col-md-4">
                <div class="form-group">
                    @if ($cliente->scan_negativas == null)
                        <label>
                            <h5>Nenhum documento (certidão negativa) cadastrado</h5>
                        </label>
                    @else
                        <a href="{{ url('storage/negativas_clientes/'.$cliente->scan_negativas) }}">Certidão Negativa</a> 
                    @endif               
                </div>
            </div> 
            </div>   
        </div> 

        <div class="box-header with-border">
            <a href="{{ url()->previous() }}" class="btn btn-primary">Voltar</a>
            <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#myModal">Excluir Cliente</button>
        </div>

        <!-- Modal -->
        <div class="modal fade" id="myModal" role="dialog">
            <div class="modal-dialog">
            
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Excluir Cliente</h4>
                </div>
                <div class="modal-body">
                <p>Deseja realmente excluir o cliente {{"$cliente->nome"}}?</p>
                </div>
                <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                <button type="submit" class="btn btn-danger">Excluir</button>
                </div>
            </div>
        </div>
        
        </div>


@stop