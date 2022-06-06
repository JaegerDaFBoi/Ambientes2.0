@extends('adminlte::page')

@section('title', 'Competencia')

@section('content')
<section class="content-header">
  <div class="container-fluid">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Competencia {{ $competencia->codigo }}</h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><a href="#">Inicio</a></li>
          <li class="breadcrumb-item"><a href="{{ route('competencias.index', $programa) }}">Lista de Competencias</a></li>
        </ol>
      </div>
    </div>
  </div>
</section>

<div class="container-fluid">
  <div class="row">
    <div class="col-md-12">
      <x-adminlte-card title="Detalles de competencia" theme="lightblue" header-class="rounded-bottom">
        <form action="{{ route('competencias.update', [$programa, $competencia]) }}" method="post">
          @method('PUT')
          @csrf
          <div class="row">
            <x-adminlte-input type="text" name="competenceCode" label="Código" fgroup-class="col-md-6" value="{{ $competencia->codigo }}" />
          </div>
          <div class="row">
            <x-adminlte-textarea name="competenceDescription" label="Descripción" rows="8" col="40" fgroup-class="col-md-8">{{ $competencia->descripcion }}</x-adminlte-textarea>
          </div>
          <div class="row">
            <x-adminlte-input type="number" name="competenceHours" label="Horas Semanales" fgroup-class="col-md-6" value="{{ $competencia->horassemana }}" />
          </div>
          <div class="row">
            <div class="col-sm-6">
              <x-adminlte-button class="btn-md" type="submit" label="Actualizar" theme="dark" icon="fas fa-lg fa-save" />
            </div>
          </div>
        </form>
        <x-slot name="footerSlot">
          <x-adminlte-button data-toggle="modal" data-target="#modalDelete" label="Eliminar Competencia" icon="fas fa-eraser" theme="danger" />
          <x-adminlte-modal id="modalDelete" title="Eliminación de registro" size="md" theme="danger" icon="fas fa-trash">
            <div>¿Está seguro que desea eliminar este registro?</div>
            <x-slot name="footerSlot">
              <form action="" method="post">
                @method("DELETE")
                @csrf
                <x-adminlte-button label="Eliminar" type="submit" theme="danger" />
              </form>
            </x-slot>
          </x-adminlte-modal>
        </x-slot>
      </x-adminlte-card>
    </div>
  </div>
  <div class="row">
    <div class="col-md-12">
      <div class="row">
        <div class="col-sm-6">
          <x-adminlte-button data-toggle="modal" data-target="#modalCreate" icon="fas fa-plus" theme="primary" label="Añadir Resultado" />
          <x-adminlte-modal id="modalCreate" title="Creación de resultado de aprendizaje" size="md" theme="primary" icon="fas fa-award">
            <form action="{{ route('resultados.store', [$competencia, $programa]) }}" method="post">
              @csrf
              <div class="row">
                <x-adminlte-textarea name="learningDescription" label="Descripción" rows="6" col="40" fgroup-class="col-md-8" />
              </div>
              <div class="row">
                <x-adminlte-input type="number" name="learningAssignTrimester" label="Trimestre de Asignación" fgroup-class="col-md-6" />
              </div>
              <div class="row">
                <x-adminlte-input type="number" name="learningEvaluationTrimester" label="Trimestre de Evaluación" fgroup-class="col-md-6" />
              </div>
              <div class="row">
                <x-adminlte-input type="text" name="learningCompetence" label="Competencia" fgroup-class="col-md-6" value="{{ $competencia->codigo }}" disabled />
              </div>
              <div class="row">
                <div class="col-md-6">
                  <x-adminlte-button class="btn-md" type="submit" label="Guardar" theme="dark" icon="fas fa-lg fa-save" />
                </div>
              </div>
            </form>
          </x-adminlte-modal>
        </div>
      </div>
      <x-adminlte-card title="Resultados de Aprendizaje" theme="lightblue" header-class="rounded-bottom">
        @php
        $heads = [
        'ID',
        'Descripcion',
        'Trimestre de Asignación',
        'Trimestre de Evaluación',
        'Opciones'
        ];
        @endphp
        <x-adminlte-datatable id="learningoutcomesTable" :heads="$heads" head-theme="dark" hoverable bordered>
          @foreach ($resultados as $resultado)
          <tr>
            <td>{{ $resultado->id }}</td>
            <td>{{ $resultado->descripcion }}</td>
            <td>{{ $resultado->trimestreasignacion }}</td>
            <td>{{ $resultado->trimestreevaluacion }}</td>
            <td>

            </td>
          </tr>
          @endforeach
        </x-adminlte-datatable>
      </x-adminlte-card>
    </div>
  </div>
</div>
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop