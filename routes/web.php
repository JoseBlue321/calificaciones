<?php

use App\Http\Controllers\AsignaturaController;
use Illuminate\Support\Facades\Route;

Route::get('/',[AsignaturaController::class,'index']);