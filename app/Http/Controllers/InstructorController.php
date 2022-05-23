<?php

namespace App\Http\Controllers;

use App\Models\Instructor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class InstructorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $instructores = Instructor::all();
        return view('instructores.index', compact('instructores'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $instructor = new Instructor();
        return view('instructores.create', compact('instructor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $instructor = new Instructor();
        $instructor->nombre = $request->instructorName;
        $instructor->cedula = $request->instructorDoc;
        $instructor->area = $request->instructorArea;
        $instructor->tipo = $request->instructorType;
        $instructor->vinculacion = $request->instructorVinculation;
        $instructor->horassemana = $request->instructorHours;
        $instructor->email = $request->instructorEmail;
        $instructor->save();
        session()->flash("flash.banner","Instructor Creado Satisfactoriamente");
        return Redirect::route('instructores.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function show(Instructor $instructor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request)
    {
        $instructor = Instructor::find($request->input('id')); 
        return view('instructores.edit', compact('instructor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Instructor $instructor)
    {
        $instructor->nombre = $request->input('instructorName');
        $instructor->cedula = $request->input('instructorDoc');
        $instructor->area = $request->input('instructorArea');
        $instructor->tipo = $request->input('instructorType');
        $instructor->vinculacion = $request->input('instructorVinculation');
        $instructor->horassemana = $request->input('instructorHours');
        $instructor->email = $request->input('instructorEmail');
        $instructor->save();
        session()->flash("flash.banner","Instructor Editado Satisfactoriamente");
        return Redirect::route('instructores.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instructor  $instructor
     * @return \Illuminate\Http\Response
     */
    public function destroy(Instructor $instructor)
    {
        $instructor->delete();
        return Redirect::route('instructores.index');
    }
}
