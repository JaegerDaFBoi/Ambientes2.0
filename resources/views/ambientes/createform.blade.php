@csrf

<div class="container-fluid">
  <div class="row">
    <x-adminlte-input name="environmentName" label="Nombre del Ambiente" fgroup-class="col-md-10" />
  </div>
  <div class="row">
    <div class="form-group col-md-6">
      <label for="environmentType">Tipo de Ambiente</label>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="environmentType" value="Virtual">
        <label class="form-check-label">Virtual</label>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="radio" name="environmentType" value="Presencial">
        <label class="form-check-label">Presencial</label>
      </div>
    </div>
  </div>
  <div class="row">
    <x-adminlte-input name="environmentCapacity" label="Capacidad" fgroup-class="col-md-6" />
  </div>
  <div class="row">
    <div class="col-md-6">
      <x-adminlte-button class="btn-md" type="submit" label="Guardar" theme="dark" icon="fas fa-lg fa-save" />
    </div>
  </div>
</div>