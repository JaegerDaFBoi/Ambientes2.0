<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $programas = Program::where('isEliminated', false)->get();
        return view('programas.index', compact('programas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $programa = new Program();
        return view('programas.create', compact('programa'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $program = new Program();
        $program->codigo = $request->programCode;
        $program->nombre = $request->programName;
        $program->duracionlectiva = $request->programSchoolStageTime;
        $program->duracionpractica = $request->programPracticalStageTime;
        $program->nivelformacion = $request->programformationLevel;
        $program->perfilinstructor = $request->programinstructorProfile;
        $program->totaltrimestres = ($request->programSchoolStageTime + $request->programPracticalStageTime) / 3;
        $program->descripcion = $request->programDescription;
        $program->save();
        session()->flash("flash.banner", "Programa Creado Satisfactoriamente");
        return Redirect::route('programas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $programa)
    {
        return view('programas.edit', compact('programa'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $programa)
    {
        $programa->codigo = $request->programCode;
        $programa->nombre = $request->programName;
        $programa->duracionlectiva = $request->programSchoolStageTime;
        $programa->duracionpractica = $request->programPracticalStageTime;
        $programa->nivelformacion = $request->programformationLevel;
        $programa->perfilinstructor = $request->programinstructorProfile;
        $programa->totaltrimestres = ($request->programSchoolStageTime + $request->programPracticalStageTime) / 3;
        $programa->descripcion = $request->programDescription;
        $programa->save();
        session()->flash("flash.banner", "Programa Editado Satisfactoriamente");
        return Redirect::route('programas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $programa)
    {
        $programa->isEliminated = true;
        $programa->save();
        return Redirect::route('programas.index');
    }
}
