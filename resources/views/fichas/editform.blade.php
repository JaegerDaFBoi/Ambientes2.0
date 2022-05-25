@csrf
@section('plugins.TempusDominusBs4', true)
<div class="container-fluid">
  <div class="row">
    <x-adminlte-input name="cardNumber" label="Número de ficha" fgroup-class="col-md-10" value="{{ $ficha->numero }}"/>
  </div>
  <div class="row">
    <x-adminlte-select name="cardProgram" label="Programa de formación" label-class="text-dark" fgroupclass="col-md-12">
      @foreach ($programas as $program)
        @if ($program->id == $ficha->fk_programa)
          <option value="{{ $program->id }}" selected>{{ $program->nombre }}</option>
        @else
          <option value="{{ $program->id }}">{{ $program->nombre }}</option>
        @endif
      @endforeach
    </x-adminlte-select>
  </div>
  <div class="row">
    <div class="form-group col-md-4">
      <label for="cardAssignedTime">Jornada</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="cardAssignedTime" value="Diurna">
        <label class="form-check-label">Diurna</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="cardAssignedTime" value="Nocturna">
        <label class="form-check-label">Nocturna</label>
      </div>
    </div>
    <div class="form-group col-md-8">
      <label for="cardMode">Modalidad</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="cardMode" value="Virtual">
        <label class="form-check-label">Virtual</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="cardMode" value="Presencial">
        <label class="form-check-label">Presencial</label>
      </div>
    </div>
  </div>
  <div class="row">
    @php
    $config = [
    'format' => 'YYYY-MM-DD',
    'dayViewHeaderFormat' => 'MMM YYYY',
    ];
    @endphp
    <x-adminlte-input-date name="cardstartDate" label="Fecha de Inicio" igroup-size="sm" :config="$config" fgroup-class="col-sm-6" value="{{ $ficha->fechainicio }}">
      <x-slot name="appendSlot">
        <div class="input-group-text bg-dark">
          <i class="fas fa-calendar-day"></i>
        </div>
      </x-slot>
    </x-adminlte-input-date>
    <x-adminlte-input-date name="cardendDate" label="Fecha de Finalización" igroup-size="sm" :config="$config" fgroup-class="col-sm-6" value="{{ $ficha->fechafin }}">
      <x-slot name="appendSlot">
        <div class="input-group-text bg-dark">
          <i class="fas fa-calendar-day"></i>
        </div>
      </x-slot>
    </x-adminlte-input-date>
  </div>
  <div class="row">
    <x-adminlte-select name="cardInstructor" label="Gestor de Grupo" label-class="text-dark" fgroup-class="col-md-10">
      @foreach ($instructores as $instructor)
        @if ($instructor->id == $ficha->fk_instructor)
          <option value="{{ $instructor->id }}" selected>{{ $instructor->nombre }}</option>
        @else
          <option value="{{ $instructor->id }}">{{ $instructor->nombre }}</option>
        @endif
      @endforeach
    </x-adminlte-select>
  </div>
  <div class="row">
    <x-adminlte-input name="cardApprentices" label="Número de aprendices" fgroup-class="col-md-6" value="{{ $ficha->cantidad }}"/>
  </div>
  <div class="row">
    <div class="col-md-6">
      <x-adminlte-button class="btn-md" type="submit" label="Guardar" theme="dark" icon="fas fa-lg fa-save" />
    </div>
  </div>
</div>