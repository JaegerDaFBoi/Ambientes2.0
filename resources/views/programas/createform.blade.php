@csrf

<div class="container-fluid">
  <div class="row">
    <x-adminlte-input type="text" name="programCode" label="Código" fgroup-class="col-md-6" />
  </div>
  <div class="row">
    <x-adminlte-input type="text" name="programName" label="Nombre del Programa" fgroup-class="col-md-10" />
  </div>
  <div class="row">
    <x-adminlte-input type="number" name="programSchoolStageTime" label="Duración Etapa Lectiva" fgroup-class="col-md-4" />
    <x-adminlte-input type="number" name="programPracticalStageTime" label="Duración Etapa Practica" fgroup-class="col-md-4" />
  </div>
  <div class="row">
    <x-adminlte-input type="text" name="programformationLevel" label="Nivel de formación" fgroup-class="col-md-8" />
  </div>
  <div class="row">
    <x-adminlte-textarea name="programinstructorProfile" label="Perfil del instructor" rows="8" col="40" fgroup-class="col-md-6" />
    <x-adminlte-textarea name="programDescription" label="Descripción" rows="8" col="40" fgroup-class="col-md-6" />
  </div>
  <div class="row">
    <div class="col-md-6">
      <x-adminlte-button class="btn-md" type="submit" label="Guardar" theme="dark" icon="fas fa-lg fa-save" />
    </div>
  </div>
</div>