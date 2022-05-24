@csrf

<div class="container-fluid">
  <div class="row">
    <x-adminlte-input name="cardNumber" label="Número de ficha" fgroup-class="col-md-10" />
  </div>
  <div class="row">
    <x-adminlte-select name="cardProgram" label="Programa de formación" label-class="text-dark" fgroupclass="col-md-12">
      @foreach ($programas as $program)
      <option value="{{ $program->id }}">{{ $program->nombre }}</option>
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
  
</div>