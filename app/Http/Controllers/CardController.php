<?php

namespace App\Http\Controllers;

use App\Models\Card;
use App\Models\Instructor;
use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fichas = Card::with('program:id,nombre','instructor:id,nombre')->get();
        return view('fichas.index', compact('fichas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $ficha = new Card();
        $programas = Program::all();
        $instructores = Instructor::all();
        return view('fichas.create', compact('ficha','programas','instructores'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $card = new Card();
        $card->numero = $request->cardNumber;
        $card->fk_programa = $request->cardProgram;
        $card->jornada = $request->cardAssignedTime;
        $card->modalidad = $request->cardMode;
        $card->fechainicio = $request->cardstartDate;
        $card->fechafin = $request->cardendDate;
        $card->fk_instructor = $request->cardInstructor;
        $card->cantidad = $request->cardApprentices;
        $card->save();
        session()->flash("flash.banner","Ficha Creada Satisfactoriamente");
        return Redirect::route('fichas.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function show(Card $card)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function edit(Card $ficha)
    {
        $programas = Program::all();
        $instructores = Instructor::all();
        return view('fichas.edit', compact('ficha','programas','instructores'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Card $card)
    {
        $card->numero = $request->cardNumber;
        $card->fk_programa = $request->cardProgram;
        $card->jornada = $request->cardAssignedTime;
        $card->modalidad = $request->cardMode;
        $card->fechainicio = $request->cardstartDate;
        $card->fechafin = $request->cardendDate;
        $card->fk_instructor = $request->cardInstructor;
        $card->cantidad = $request->cardApprentices;
        $card->save();
        session()->flash("flash.banner","Ficha Editada Satisfactoriamente");
        return Redirect::route('fichas.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Card  $card
     * @return \Illuminate\Http\Response
     */
    public function destroy(Card $card)
    {
        $card->delete();
        return Redirect::route('fichas.index');
    }
}
