@extends('adminlte::page')

@section('title', 'Instructores')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista de Instructores</h1>
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
      <a href="{{ route('instructores.create') }}">
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
          'Nombre',
          'Documento',
          'Área',
          'Tipo de Instructor',
          'Vinculacion contractual',
          'Total de horas',
          'Correo Electrónico',
          'Opciones'
          ];
          @endphp
          <x-adminlte-datatable id="instructorTable" :heads="$heads" head-theme="dark" hoverable bordered>
            @foreach ($instructores as $instructor)
            <tr>
              <td>{{ $instructor->id }}</td>
              <td>{{ $instructor->nombre }}</td>
              <td>{{ $instructor->cedula }}</td>
              <td>{{ $instructor->area }}</td>
              <td>{{ $instructor->tipo }}</td>
              <td>{{ $instructor->vinculacion }}</td>
              <td>{{ $instructor->horassemana }}</td>
              <td>{{ $instructor->email }}</td>
              <td>
                <a href="{{ route('instructores.edit',['id'=>$instructor->id] ) }}">
                  
                  <x-adminlte-button theme="primary" icon="fas fa-edit" />
                </a>
                <form action="{{ route('instructores.destroy', $instructor)}}" method="post">
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