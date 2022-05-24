@extends('adminlte::page')

@section('title', 'Fichas')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista de Fichas</h1>
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
      <a href="{{ route('fichas.create') }}">
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
            'Número de Ficha',
            'Programa de Formación',
            'Jornada',
            'Modalidad',
            'Fecha de inicio',
            'Fecha de terminación',
            'Gestor de grupo',
            'Número de aprendices',
            'Opciones'
            ];
          @endphp
          <x-adminlte-datatable id="cardTable" :heads="$heads" head-theme="dark" hoverable bordered>
            @foreach ($fichas as $ficha)
            <tr>
              <td>{{ $ficha->id }}</td>
              <td>{{ $ficha->numero }}</td>
              <td>{{ $ficha->fk_programa->nombre }}</td>
              <td>{{ $ficha->jornada }}</td>
              <td>{{ $ficha->modalidad }}</td>
              <td>{{ $ficha->fechainicio }}</td>
              <td>{{ $ficha->fechafin }}</td>
              <td>{{ $ficha->fk_instructor }}</td>
              <td>{{ $ficha->cantidad }}</td>
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