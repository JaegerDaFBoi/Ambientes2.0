@csrf

<div class="container-fluid">
  <div class="row">
    <x-adminlte-input name="instructorName" label="Nombre del Instructor" fgroup-class="col-md-10"  value="{{ $instructor->nombre }}" />
  </div>
  <div class="row">
    <x-adminlte-input name="instructorDoc" label="Cédula" fgroup-class="col-md-6" value="{{ $instructor->cedula }}" />
  </div>
  <div class="row">
    @php
    $options = [
      'AREA DE SISTEMAS, MANTENIMIENTO DE EQUIPOS DE COMPUTO Y DISEÑO GRAFICO Y MULTIMEDIAL',
      'AREA DE ELECTRONICA Y MANTENIMIENTO ELECTRONICO',
      'AREA DE DISEÑO, IMPLEMENTACION Y MANTENIMIENTO DE SISTEMAS DE TELECOMUNICACIONES',
      'AREA DE TELEINFORMATICA Y ADSI',
      'AREA DE CNC',
      'GESTION DE LA PRODUCCION INDUSTRIAL',
      'AREA DE AUTOMATIZACION INDUSTRIAL Y DISEÑO E INTEGRACION DE AUTOMATISMOS MECATRONICOS',
      'INTERACCION IDONEA COMUNICACION',
      'AREA DE INGLES',
      'AREA DE MANTENIMIENTO BIOMEDICO',
      'CULTURA FISICA',
      'EMPRENDIMIENTO'
      ];
    @endphp
    <x-adminlte-select name="instructorArea" label="Área" label-class="text-dark" fgroup-class="col-md-8">
      @foreach ($options as $option)
        @if ($option == $instructor->area)
        <option selected>{{ $option }}</option>
        @else
        <option>{{ $option }}</option>
        @endif
      @endforeach
    </x-adminlte-select>
    <div class="form-group col-md-4">
      <label for="instructorType">Tipo de Instructor</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="instructorType" value="Virtual">
        <label class="form-check-label">Virtual</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="instructorType" value="Presencial">
        <label class="form-check-label">Presencial</label>
      </div>
    </div>
  </div>
  
  <div class="row">
    <div class="form-group col-md-8">
      <label for="instructorVinculation">Vinculación</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="instructorVinculation" value="Planta">
        <label class="form-check-label">Planta</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="instructorVinculation" value="Contratista">
        <label class="form-check-label">Contratista</label>
      </div>
    </div>
    <x-adminlte-input name="instructorHours" type="number" label="Total/Horas del Instructor" label-class="text-dark" fgroup-class="col-md-4" value="{{ $instructor->horassemana }}" />
  </div>
  <div class="row">
    <x-adminlte-input name="instructorEmail" type="email" label="Correo Electrónico" label-class="text-dark" fgroup-class="col-md-10"  value="{{ $instructor->email }}"/>
  </div>
  <div class="row">
    <div class="col-md-6">
      <x-adminlte-button class="btn-md" type="submit" label="Guardar" theme="dark" icon="fas fa-lg fa-save" />
    </div>
  </div>
</div>