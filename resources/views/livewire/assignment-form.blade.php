<div>
  @csrf
    @section('plugins.TempusDominusBs4', true)
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <x-adminlte-select name="cardAssignment" id="cardAssignment" label="Ficha de Formación"
                    label-class="text-dark" wire:model="fichaId">
                    <option value="">Seleccione ficha</option>
                    @foreach ($fichas as $ficha)
                        <option value="{{ $ficha->fk_programa }}">{{ $ficha->numero }}</option>
                    @endforeach
                </x-adminlte-select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <x-adminlte-select name="cardProgram" id="cardProgram" label="Programa de Formación"
                    label-class="text-dark" wire:model="programaId">
                    <option value="">Seleccione programa</option>
                    @foreach ($programa as $item)
                        <option value="{{ $item->id }}">{{ $item->nombre }}</option>
                    @endforeach
                </x-adminlte-select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <x-adminlte-select name="programCompetences" id="programCompetences" label="Competencia"
                    label-class="text-dark" wire:model="competenciaId">
                    <option value="">Seleccione competencia</option>
                    @foreach ($competencias as $competencia)
                        <option value="{{ $competencia->id }}">{{ $competencia->codigo }}</option>
                    @endforeach
                </x-adminlte-select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <x-adminlte-select name="competenceOutcomes" id="competenceOutcomes" label="Resultados"
                    label-class="text-dark">
                    <option value="">Seleccione resultado</option>
                    @foreach ($resultados as $resultado)
                        <option value="{{ $resultado->id }}">{{ $resultado->descripcion }}</option>
                    @endforeach
                </x-adminlte-select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <x-adminlte-select name="instructorAssignment" id="instructorAssignment" label="Instructor"
                    label-class="text-dark">
                    <option value="">Seleccione instructor</option>
                    @foreach ($instructores as $instructor)
                        <option value="{{ $instructor->id }}">{{ $instructor->nombre }}</option>
                    @endforeach
                </x-adminlte-select>
            </div>
        </div>

        <div class="row">
            <div class="col-sm-12">
                <x-adminlte-select name="environment" id="environment" label="Ambiente" label-class="text-dark">
                    <option value="">Seleccione ambiente</option>
                    @foreach ($ambientes as $ambiente)
                        <option value="{{ $ambiente->id }}">{{ $ambiente->nombre }}</option>
                    @endforeach
                </x-adminlte-select>
            </div>
        </div>

        <div class="row">
            @php
                $config = [
                    'format' => 'YYYY-MM-DD',
                    'dayViewHeaderFormat' => 'MMM YYYY',
                ];
            @endphp 
            <x-adminlte-input-date name="dateAssignment" id="dateAssignment" label="Fecha" label-class="text-dark" igroup-size="sm" :config="$config" fgroup-class="col-sm-12">
              <x-slot name="appendSlot">
                <div class="input-group-text bg-dark">
                  <i class="fas fa-calendar-day"></i>
                </div>
              </x-slot>
            </x-adminlte-input-date>
        </div>

        <div class="row">
          @php
            $config = [
              'format' => 'HH:mm:ss',
            ];
          @endphp
          <x-adminlte-input-date name="startTime" id="startTime" label="Hora de Inicio" label-class="text-dark" igroup-size="sm" :config="$config" fgroup-class="col-sm-12">
            <x-slot name="appendSlot">
              <div class="input-group-text bg-dark">
                <i class="fas fa-clock"></i>
              </div>
            </x-slot>
          </x-adminlte-input-date> 
        </div>

        <div class="row">
          @php
            $config = [
              'format' => 'HH:mm:ss',
            ];
          @endphp
          <x-adminlte-input-date name="endTime" id="endTime" label="Hora de Fin" label-class="text-dark" igroup-size="sm" :config="$config" fgroup-class="col-sm-12">
            <x-slot name="appendSlot">
              <div class="input-group-text bg-dark">
                <i class="fas fa-clock"></i>
              </div>
            </x-slot>
          </x-adminlte-input-date> 
        </div>

        <div class="row">
          <x-adminlte-select name="typeAssignment" id="typeAssignment" label="Tipo de Asignacion" label-class="text-dark" fgroup-class="col-sm-12">
            <x-adminlte-options :options="['Horario de Formación', 'Complementaria', 'Horas Adicionales']" placeholder="Seleccione un tipo..." />
          </x-adminlte-select>
        </div>

        <div class="row">
          <x-adminlte-textarea name="descriptionAssignment" id="descriptionAssignment" label="Descripcion" label-class="text-dark" rows="4" col="16" fgroup-class="col-sm-12" />
        </div>

        <div class="row">
          <div class="col-md-6">
            <x-adminlte-button class="btn-sm" type="submit" label="Guardar" theme="dark" icon="fas fa-lg fa-save" />
          </div>
        </div>

    </div>
</div>
