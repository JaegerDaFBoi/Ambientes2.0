@csrf

<div class="container-fluid">
  <div class="row">
    <x-adminlte-input name="instructorName" label="Nombre del Instructor" fgroup-class="col-md-10"  />
  </div>
  <div class="row">
    <x-adminlte-input name="instructorDoc" label="Cédula" fgroup-class="col-md-6" :value="old('instructorDoc'), $instructor->cedula" />
  </div>
  <div class="row">
    <x-adminlte-select name="instructorArea" label="Área" label-class="text-dark" fgroup-class="col-md-8">
      <option disabled selected>Seleccione un área</option>
      <option>AREA DE SISTEMAS, MANTENIMIENTO DE EQUIPOS DE COMPUTO Y DISEÑO GRAFICO Y MULTIMEDIAL</option>
      <option>AREA DE ELECTRONICA Y MANTENIMIENTO ELECTRONICO</option>
      <option>AREA DE DISEÑO, IMPLEMENTACION Y MANTENIMIENTO DE SISTEMAS DE TELECOMUNICACIONES</option>
      <option>AREA DE TELEINFORMATICA Y ADSI</option>
      <option>AREA DE CNC</option>
      <option>GESTION DE LA PRODUCCION INDUSTRIAL</option>
      <option>AREA DE AUTOMATIZACION INDUSTRIAL Y DISEÑO E INTEGRACION DE AUTOMATISMOS MECATRONICOS</option>
      <option>INTERACCION IDONEA COMUNICACION</option>
      <option>AREA DE INGLES</option>
      <option>AREA DE MANTENIMIENTO BIOMEDICO</option>
      <option>CULTURA FISICA</option>
      <option>EMPRENDIMIENTO</option>
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
    <x-adminlte-input name="instructorHours" type="number" label="Total/Horas del Instructor" label-class="text-dark" fgroup-class="col-md-4" />
  </div>
  <div class="row">
    <x-adminlte-input name="instructorEmail" type="email" label="Correo Electrónico" label-class="text-dark" fgroup-class="col-md-10" />
  </div>
  <div class="row">
    <div class="col-md-6">
      <x-adminlte-button class="btn-md" type="submit" label="Guardar" theme="dark" icon="fas fa-lg fa-save" />
    </div>
  </div>
</div>