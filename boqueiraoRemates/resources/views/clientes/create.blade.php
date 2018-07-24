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
    <form method="post" action="{{route ('clientes.store')}}">
        {{ csrf_field() }}

        <div class="box-body">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <div class="form-group">
                            <label>Nome</label>
                                <input type="text" class="form-control" placeholder="Nome" name="nome" required>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>E-mail</label>
                            <div class="form-group">
                                <input class="form-control" placeholder="E-mail" type="email" name="email" required>
                            </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>CPF</label>
                        <input type="text" class="form-control" placeholder="CPF" name="cpf">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>CNPJ</label>
                        <input type="text" class="form-control" placeholder="CNPJ" name="cnpj">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nome da mãe</label>
                        <input type="text" class="form-control" placeholder="Nome da mãe" name="nome_mae">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Nome do pai</label>
                        <input type="text" class="form-control" placeholder="Nome do pai" name="nome_pai">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Data de Nascimento</label>
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Data de Nascimento" name="data_nasc">
                            </div>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>RG</label>
                        <input type="text" class="form-control" placeholder="RG" name="rg">
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
                        <label>Complemento</label>
                        <input type="text" class="form-control" placeholder="Complemento" name="complemento">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Bairro</label>
                        <input type="text" class="form-control" placeholder="Bairro" name="bairro">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>CEP</label>
                        <input type="text" class="form-control" placeholder="CEP" name="cep">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Cidade</label>
                        <input type="text" class="form-control" placeholder="Cidade" name="cidade">
                    </div>
                </div>
                <div class="col-md-1">
                    <div class="form-group">
                        <label>UF</label>
                        <select class="form-control" name="uf">
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
                        <select class="form-control" name="pais">
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
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Banco</label>
                        <input type="text" class="form-control" placeholder="Banco" name="banco">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Agência</label>
                        <input type="text" class="form-control" placeholder="Agência" name="agencia">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Conta Corrente</label>
                        <input type="text" class="form-control" placeholder="Conta Corrente" name="conta">
                    </div>
                </div> 
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Profissão</label>
                        <input type="text" class="form-control" placeholder="Profissão" name="profissao">
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="form-group">
                        <label>Renda</label>
                            <div class="input-group">
                                <span class="input-group-addon">R$</span>
                                    <input type="text" class="form-control" placeholder="Renda" name="renda" >
                                    <span class="input-group-addon">,00</span>
                            </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Estabelecimento</label>
                        <input type="text" class="form-control" placeholder="Estabelecimento" name="estabelecimento" >
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <label>Habilitação</label>
                        <select class="form-control" name="habilitacao">
                            <option>Habilitado</option>
                            <option>Bloqueado</option>    
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Cadastro em outras leiloeiras</label>
                        <select class="form-control" name="cadastro_leiloeiras">
                            <option>Sim</option>
                            <option>Não</option>    
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Leiloeiras que possui cadastro</label>
                        <input type="text" class="form-control" placeholder="Leiloeiras" name="leiloeiras">
                    </div>
                </div> 
            </div>
            <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label>Upload RG, CPF ou CNH</label>
                    <input type="file" value="Procurar" class="form-control" placeholder="Upload RG, CPF ou CNH" name="scan_rg_cpf_cnh">
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label>Upload Comprovante de Endereço</label>
                    <input type="file" value="Procurar" class="form-control" placeholder="Upload RG, CPF ou CNH" name="scan_comprovante_endereco">
                </div>
            </div> 
            <div class="col-md-4">
                <div class="form-group">
                    <label>Upload Certidão Negativa</label>
                    <input type="file" value="Procurar" class="form-control" placeholder="Upload RG, CPF ou CNH" name="scan_negativas">
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