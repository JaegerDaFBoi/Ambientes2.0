@extends('adminlte::page')

@section('title', 'Ambientes')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Lista de Ambientes</h1>
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
      <a href="{{ route('ambientes.create') }}">
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
          'Tipo',
          'Capacidad',
          'Opciones'
          ];
          @endphp
          <x-adminlte-datatable id="environmentTable" :heads="$heads" head-theme="dark" hoverable bordered>
            @foreach ($ambientes as $ambiente)
            <tr>
              <td>{{ $ambiente->id }}</td>
              <td>{{ $ambiente->nombre }}</td>
              <td>{{ $ambiente->tipo }}</td>
              <td>{{ $ambiente->aforo }}</td>
              <td>
                <a href="{{ route('ambientes.edit', $ambiente) }}">
                  <x-adminlte-button theme="primary" icon="fas fa-edit" />
                </a>
                <x-adminlte-button data-toggle="modal" data-target="#modalDelete" icon="fas fa-eraser" theme="danger" />
                <x-adminlte-modal id="modalDelete" title="Eliminación de registro" size="md" theme="danger" icon="fas fa-trash">
                  <div>¿Está seguro que desea eliminar este registro?</div>
                  <x-slot name="footerSlot">
                    <form action="{{ route('ambientes.destroy', $ambiente)}}" method="post">
                      @method("DELETE")
                      @csrf
                      <x-adminlte-button label="Eliminar" type="submit" theme="danger" />
                    </form>
                  </x-slot>
                </x-adminlte-modal>
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