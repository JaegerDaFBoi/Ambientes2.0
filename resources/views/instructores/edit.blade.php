@extends('adminlte::page')

@section('title', 'Instructores')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Detalles del Instructor</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ route('instructores.index') }}">Lista de Instructores</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <x-adminlte-card  title="Formulario de actualización" theme="lightblue" header-class="rounded-bottom">
        <form action="{{ route('instructores.update', $instructor) }}" method="post">
          @method('PUT')
          @include('instructores.editform', ['instructor'=>$instructor])
        </form>
      </x-adminlte-card>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop