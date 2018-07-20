@extends('adminlte::page')

@section('title', 'Boqueirão Remates')

@section('content_header')
    <h3>Olá,</h3>
@stop

@section('content')
    <div class="col-lg-3 col-xs-6">
          <!-- small box Clientes Cadastrados -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3>975</h3>

              <p>Clientes Cadastrados</p>
            </div>
            <div class="icon">
              <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
    <div class="col-lg-3 col-xs-6">
          <!-- small box Clientes Ativos -->
          <div class="small-box bg-green">
            <div class="inner">
              <h3>53<sup style="font-size: 20px">%</sup></h3>

              <p>Clientes Ativos</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars"></i>
            </div>
            <a href="#" class="small-box-footer">Mais informações <i class="fa fa-arrow-circle-right"></i></a>
          </div>
    </div>
@stop