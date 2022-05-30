@extends('adminlte::page')

@section('title', 'Competencias')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista de Competencias</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="{{ route('programas.index') }}">Inicio</a></li>
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
    <div class="col-md-6">
      <a href="{{ route('competencias.create', $programa) }}">
        <x-adminlte-button label="Crear Competencia" theme="primary" />
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
          'Descripcion',
          'Horas Semanales',
          'Opciones'
          ];
          @endphp
          <x-adminlte-datatable id="competencesTable" :heads="$heads" head-theme="dark" hoverable bordered>
            @foreach ($competencias as $competencia)
            <tr>
              <td>{{ $competencia->id }}</td>
              <td>{{ $competencia->codigo }}</td>
              <td>{{ $competencia->descripcion }}</td>
              <td>{{ $competencia->horassemanales }}</td>
              <td>
                <a href="">
                  <x-adminlte-button theme="primary" icon="fas fa-edit" />
                </a>
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