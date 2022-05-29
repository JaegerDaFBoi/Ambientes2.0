<?php

namespace App\Http\Controllers;

use App\Models\Environment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class EnvironmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambientes = Environment::where('isEliminated', false)->get();
        return view('ambientes.index', compact('ambientes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ambiente = new Environment();
        return view('ambientes.create', compact('ambiente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ambiente = new Environment();
        $ambiente->nombre = $request->environmentName;
        $ambiente->tipo = $request->environmentType;
        $ambiente->aforo = $request->environmentCapacity;
        $ambiente->save();
        session()->flash("flash.banner", "Ambiente Creado Satisfactoriamente");
        return Redirect::route('ambientes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function show(Environment $ambiente)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function edit(Environment $ambiente)
    {
        return view('ambientes.edit', compact('ambiente'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Environment $ambiente)
    {
        $ambiente->nombre = $request->environmentName;
        $ambiente->tipo = $request->environmentType;
        $ambiente->aforo = $request->environmentCapacity;
        $ambiente->save();
        session()->flash("flash.banner", "Ambiente Editado Satisfactoriamente");
        return Redirect::route('ambientes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Environment  $environment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Environment $ambiente)
    {
        $ambiente->isEliminated = true;
        $ambiente->save();
        return Redirect::route('ambientes.index');
    }
}
