<?php

namespace App\Http\Controllers;

use App\Models\Competence;
use App\Models\LearningOutcome;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CompetenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Program $programa)
    {
        $competencias = Competence::where('fk_programa','=', $programa->id)->where('isEliminated',false)->get();
        
        return view('competencias.index', compact('programa','competencias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Program $programa)
    {
        $competencia = new Competence();
        return view('competencias.create', compact('programa', 'competencia'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Program $programa)
    {
        $competence = new Competence();
        $competence->codigo = $request->competenceCode;
        $competence->descripcion = $request->competenceDescription;
        $competence->horassemana = $request->competenceHours;
        $competence->fk_programa = $programa->id;
        $competence->save();
        session()->flash("flash.banner", "Competencia Creada Satisfactoriamente");
        return Redirect::route('competencias.index', compact('programa'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function show(Program $programa, Competence $competencia)
    {
        $resultados = LearningOutcome::where('fk_competencia','=', $competencia->id)->where('isEliminated',false)->get();
        return view('competencias.show', compact('programa', 'competencia', 'resultados'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function edit(Competence $competence)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $programa, Competence $competencia)
    {
        $competencia->codigo = $request->competenceCode;
        $competencia->descripcion = $request->competenceDescription;
        $competencia->horassemana = $request->competenceHours;
        $competencia->fk_programa = $programa->id;
        $competencia->save();
        session()->flash("flash.banner", "Competencia Editada Satisfactoriamente");
        return Redirect::route('competencias.index', compact('programa'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Competence  $competence
     * @return \Illuminate\Http\Response
     */
    public function destroy(Competence $competence)
    {
        //
    }
}
