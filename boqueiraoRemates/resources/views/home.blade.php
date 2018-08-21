@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')

@stop

@section('content')
      <div class="col-lg-3 col-xs-6">
          <!-- small box Clientes Cadastrados -->
          <div class="small-box bg-blue">
            <div class="inner">
              <h3>{{$total_clientes_divulgacao}}</h3>

              <p>Clientes Divulgação</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{route('clientes_divulgacao.index')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
    <div class="col-lg-3 col-xs-6">
          <!-- small box Clientes Cadastrados -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>{{$total_clientes}}</h3>

              <p>Clientes</p>
            </div>
            <div class="icon">
              <i class="ion ion-person"></i>
            </div>
            <a href="{{route('clientes.index')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
    <div class="col-lg-3 col-xs-6">
          <div class="small-box bg-red">
            <div class="inner">
              <h3>{{$total_habilitados}}</h3>

              <p>Clientes Habilitados</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"></i>
            </div>
            <a href="{{route('clientes.index')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>

    <div class="col-lg-3 col-xs-6">
          <!-- small box Clientes Ativos -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>{{$percentual_habilitados}}<sup style="font-size: 20px">%</sup></h3>

              <p>Clientes Habilitados</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="{{route('clientes.index')}}" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
@stop