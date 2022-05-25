@extends('adminlte::page')

@section('title', 'Programas')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista de Programas</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('dashboard') }}">Inicio</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-6">
      <a href="{{ route('programas.create') }}">
        <x-adminlte-button label="Crear Nuevo Registro" theme="primary" />
      </a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-body table-responsive p-0">
          @php
          $heads = [
          'ID',
          'Codigo',
          'Nombre',
          'Etapa lectiva/Meses',
          'Etapa practica/Meses',
          'Nivel de formación',
          'Perfil del instructor',
          'Descripcion',
          'Trimestres en total',
          'Competencias',
          'Opciones'
          ];
          @endphp
          <x-adminlte-datatable id="programTable" :heads="$heads" head-theme="dark" hoverable bordered>
            @foreach ($programas as $programa)
            <tr>
              <td>{{ $programa->id }}</td>
              <td>{{ $programa->codigo }}</td>
              <td>{{ $programa->nombre }}</td>
              <td>{{ $programa->duracionlectiva }}</td>
              <td>{{ $programa->duracionpractica }}</td>
              <td>{{ $programa->nivelformacion }}</td>
              <td>{{ $programa->perfilinstructor }}</td>
              <td>{{ $programa->descripcion }}</td>
              <td>{{ $programa->totaltrimestres }}</td>
              <td><a href="">Competencias</a></td>
              <td>
                <a href="">
                <x-adminlte-button theme="primary" icon="fas fa-edit" />
                </a>
                <form action="" method="post">
                  @method("DELETE")
                  @csrf
                  <x-adminlte-button type="submit" theme="danger" icon="fas fa-eraser" />
                </form>
              </td>
            </tr>
            @endforeach
          </x-adminlte-datatable>
        </div>
      </div>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop