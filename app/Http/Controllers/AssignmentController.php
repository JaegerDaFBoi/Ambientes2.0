<?php

namespace App\Http\Controllers;

use App\Models\Assignment;
use App\Models\Card;
use App\Models\Competence;
use App\Models\Environment;
use App\Models\Instructor;
use App\Models\LearningOutcome;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AssignmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructores = Instructor::all();
        $ambientes = Environment::all();
        $fichas = Card::all();
        $programas = Program::all();
        $competencias = Competence::all();
        $resultados = LearningOutcome::all();
        return view('asignaciones.index', compact('programas','competencias','resultados','fichas','instructores','ambientes'));

        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $assignment = new Assignment();
        $assignment->fk_instructor = $request->instructorAssignment;
        $assignment->fk_ambiente = $request->environment;
        $assignment->fk_ficha = $request->cardAssignment;
        $assignment->fk_competencia = $request->programCompetences;
        $assignment->fecha = $request->dateAssignment;
        $assignment->horainicio = $request->startTime;
        $assignment->horafin = $request->endTime;
        $assignment->tipoasignacion = $request->typeAssignment;
        $assignment->descripcion = $request->descriptionAssignment;
        $assignment->save();
        session()->flash("flash.banner","Ficha Creada Satisfactoriamente");
        return Redirect::route('calendario.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function show(Assignment $assignment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function edit(Assignment $assignment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Assignment $assignment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Assignment  $assignment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Assignment $assignment)
    {
        //
    }
}
