@csrf

<div class="container-fluid">
  <div class="row">
    <x-adminlte-input type="text" name="competenceCode" label="Código" fgroup-class="col-md-6" />
  </div>
  <div class="row">
    <x-adminlte-textarea name="competenceDescription" label="Descripción" rows="8" col="40" fgroup-class="col-md-8" />
  </div>
  <div class="row">
    <x-adminlte-input type="number" name="competenceHours" label="Horas Semanales" fgroup-class="col-md-6" />
  </div>
  <div class="row">
    <div class="col-md-6">
      <x-adminlte-button class="btn-md" type="submit" label="Guardar" theme="dark" icon="fas fa-lg fa-save" />
    </div>
  </div>
</div>