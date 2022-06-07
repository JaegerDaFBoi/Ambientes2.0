<?php

use App\Http\Controllers\AssignmentController;
use App\Http\Controllers\CardController;
use App\Http\Controllers\CompetenceController;
use App\Http\Controllers\EnvironmentController;
use App\Http\Controllers\InstructorController;
use App\Http\Controllers\LearningOutcomeController;
use App\Http\Controllers\ProgramController;
use App\Models\Environment;
use App\Models\Program;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.index');
    })->name('dashboard');
});

Route::get('/auth', function(){
    return view('auth.register');
});

//Rutas Instructores
Route::get('/instructor/index',[InstructorController::class, 'index'])->name('instructores.index');
Route::get('/instructor/create',[InstructorController::class, 'create'])->name('instructores.create');
Route::post('/instructor/stored',[InstructorController::class, 'store'])->name('instructores.store');
Route::get('/instructor/{instructor}/edit',[InstructorController::class, 'edit'])->name('instructores.edit');
Route::put('/instructor/{instructor}/updated',[InstructorController::class, 'update'])->name('instructores.update');
Route::delete('/instructor/delete/{instructor}',[InstructorController::class,'destroy'])->name('instructores.destroy');

//Rutas Fichas
Route::get('/ficha/index',[CardController::class, 'index'])->name('fichas.index');
Route::get('/ficha/create',[CardController::class, 'create'])->name('fichas.create');
Route::post('/ficha/stored',[CardController::class, 'store'])->name('fichas.store');
Route::get('/ficha/{ficha}/edit',[CardController::class, 'edit'])->name('fichas.edit');
Route::put('/ficha/{ficha}/updated',[CardController::class, 'update'])->name('fichas.update');
Route::delete('/ficha/delete/{ficha}',[CardController::class, 'destroy'])->name('fichas.destroy');

//Rutas Ambientes
Route::get('/ambiente/index',[EnvironmentController::class, 'index'])->name('ambientes.index');
Route::get('/ambiente/create',[EnvironmentController::class, 'create'])->name('ambientes.create');
Route::post('/ambiente/stored',[EnvironmentController::class, 'store'])->name('ambientes.store');
Route::get('/ambiente/{ambiente}/edit',[EnvironmentController::class, 'edit'])->name('ambientes.edit');
Route::put('/ambiente/{ambiente}/updated',[EnvironmentController::class, 'update'])->name('ambientes.update');
Route::delete('/ambiente/delete/{ambiente}',[EnvironmentController::class, 'destroy'])->name('ambientes.destroy');

//Rutas Programas
Route::get('/programa/index',[ProgramController::class, 'index'])->name('programas.index');
Route::get('/programa/create',[ProgramController::class, 'create'])->name('programas.create');
Route::post('/programa/stored',[ProgramController::class, 'store'])->name('programas.store');
Route::get('/programa/{programa}/edit',[ProgramController::class, 'edit'])->name('programas.edit');
Route::put('/programa/{programa}/updated',[ProgramController::class, 'update'])->name('programas.update');
Route::delete('/programa/delete/{programa}',[ProgramController::class, 'destroy'])->name('programas.destroy');

//Rutas Competencias
Route::get('/competencia/{programa}/index',[CompetenceController::class, 'index'])->name('competencias.index');
Route::get('/competencia/{programa}/create',[CompetenceController::class, 'create'])->name('competencias.create');
Route::post('/competencia/{programa}/stored',[CompetenceController::class, 'store'])->name('competencias.store');
Route::get('/competencia/{programa}/{competencia}/show',[CompetenceController::class, 'show'])->name('competencias.show');
Route::put('/competencia/{programa}/{competencia}/updated',[CompetenceController::class, 'update'])->name('competencias.update');

//Rutas Resultados de Aprendizaje
Route::post('/resultado/{competencia}/{programa}/stored',[LearningOutcomeController::class, 'store'])->name('resultados.store');

//Rutas Calendario
Route::get('/calendario/index',[AssignmentController::class, 'index'])->name('calendario.index');