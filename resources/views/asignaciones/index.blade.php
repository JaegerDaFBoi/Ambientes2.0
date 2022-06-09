@extends('adminlte::page')

@section('title', 'Calendario')

@section('content')
    <div class="container">
        <div id="calendario">

        </div>

        <div>
            <x-adminlte-button data-toggle="modal" data-target="#evento" theme="danger" label="Crear" />
            <x-adminlte-modal id="evento" title="Asignacion" size="md" theme="danger">
                <div class="row">
                    <div class="col-sm-12">
                        <x-adminlte-select name="instructorAssignment" label="Instructores" label-class="text-dark"
                            fgroupclass="col-md-12">
                            @foreach ($instructores as $instructor)
                                <option value="{{ $instructor->id }}">{{ $instructor->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <x-adminlte-select name="environmentAssignment" label="Ambientes" label-class="text-dark"
                            fgroupclass="col-md-12">
                            @foreach ($ambientes as $ambiente)
                                <option value="{{ $ambiente->id }}">{{ $ambiente->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <x-adminlte-select name="programAssignment" id="programAssignment" label="Programa de formación"
                            label-class="text-dark" fgroupclass="col-md-12">
                            <option selected value="Seleccione un programa">Seleccione un programa</option>
                            @foreach ($programas as $programa)
                                <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                    </div>
                </div>

                <div class="row">
                    <div class="col-sm-12">
                        <x-adminlte-select name="competenceAssignment" id="competenceAssignment" label="Programa de formación"
                            label-class="text-dark" fgroupclass="col-md-12">
                            <option selected value="Seleccione un programa">Seleccione un programa</option>
                            @foreach ($programas as $programa)
                                <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                            @endforeach
                        </x-adminlte-select>
                    </div>
                </div>


            </x-adminlte-modal>
        </div>
    </div>
@stop

@section('js')
    <script src="{{ asset('js/calendario.js') }}"></script>
    <script src="{{ asset('js/mostrar.js') }}"></script>
@stop
