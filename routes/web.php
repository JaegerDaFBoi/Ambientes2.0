<?php

use App\Http\Controllers\InstructorController;
use Illuminate\Support\Facades\Route;

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

//Rutas instructores
Route::get('/instructor/index',[InstructorController::class, 'index'])->name('instructores.index');
Route::get('/instructor/create',[InstructorController::class, 'create'])->name('instructores.create');
Route::post('/instructor/stored', [InstructorController::class, 'store'])->name('instructores.store');
Route::get('/instructor/edit',[InstructorController::class, 'edit'])->name('instructores.edit');
Route::post('/instructor/updated',[InstructorController::class, 'update'])->name('instructores.update');
Route::delete('/instructor/delete',[InstructorController::class,'destroy'])->name('instructores.destroy');