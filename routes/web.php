<?php

use App\Http\Controllers\AsignaturaController;
use App\Http\Controllers\PersonaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AsignaturaController::class,'index']);
Route::get('asignaturas/{id}',[AsignaturaController::class,'show']);
Route::post('persona',[PersonaController::class,'show'])->name('show.persona');