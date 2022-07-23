<?php

namespace App\Http\Livewire;

use App\Models\Card;
use App\Models\Competence;
use App\Models\Environment;
use App\Models\Instructor;
use App\Models\LearningOutcome;
use App\Models\Program;
use Livewire\Component;

class AssignmentForm extends Component
{

  public $fichas = [];
  public $fichaId;
  public $programa = [];
  public $programaId;
  public $competencias = [];
  public $competenciaId;
  public $resultados = [];
  public $instructores = [];
  public $ambientes = [];

  public function mount()
  {
    $this->fichas = Card::where('isEliminated', false)->get();
    $this->instructores = Instructor::where('isEliminated',false)->get();
    $this->ambientes = Environment::where('isEliminated',false)->get();
    $this->getPrograma();
    $this->getCompetencias();
    $this->getResultados();
  }

  public function updatedFichaId()
  {
    $this->getPrograma();
  }

  public function updatedProgramaId()
  {
    $this->getCompetencias();
  }

  public function updatedCompetenciaId()
  {
    $this->getResultados();
  }
   
  public function getPrograma()
  {
    if ($this->fichaId != '') {
      $this->programa = Program::where('id', $this->fichaId)
      ->where('isEliminated', false)
      ->get();
    } else {
      $this->programa = [];
    }
  }

  public function getCompetencias()
  {
    if ($this->programaId != '') {
      $this->competencias = Competence::where('fk_programa', $this->programaId)
      ->where('isEliminated', false)
      ->get();
    } else {
      $this->competencias = [];
    }
  }

  public function getResultados()
  {
    if ($this->competenciaId != '') {
      $this->resultados = LearningOutcome::where('fk_competencia', $this->competenciaId)
      ->where('isEliminated', false)
      ->get();
    } else {
      $this->resultados = [];
    }
  }


  public function render()
  {
    return view('livewire.assignment-form');
  }

}
