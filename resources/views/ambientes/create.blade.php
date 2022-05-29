@extends('adminlte::page')

@section('title', 'Instructores')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Registro de Ambientes</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ route('ambientes.index') }}">Lista de Ambientes</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <x-adminlte-card title="Formulario de registro" theme="lightblue" theme-mode="outline" header-class="text-uppercase rounded-bottom border-info">
        <form role="form" action="{{ route('ambientes.store') }}" method="post">
          @include('ambientes.createform')
        </form>
      </x-adminlte-card>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop