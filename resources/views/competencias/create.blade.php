@extends('adminlte::page')

@section('title', 'Competencia')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Registro de Competencia</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ route('competencias.index', $programa) }}">Lista de Competencias</a></li>
        </ol>
      </div>
    </div>
    <div class="row mb-2">
      <div class="col-sm-8">
        <h1>{{ $programa->nombre }}</h1>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <x-adminlte-card title="Formulario de registro" theme="lightblue" theme-mode="outline" header-class="rounded-bottom">
        <form action="{{ route('competencias.store', $programa) }}" method="post">
          @include('competencias.createform')
        </form>
      </x-adminlte-card>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop