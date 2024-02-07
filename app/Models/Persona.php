<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Persona extends Model
{
    use HasFactory;
    protected $table = 'personas';
    protected $fillable = [
        'asignatura_id',
        'carnet',
        'nombre',
        'paterno',
        'materno',
        'nota',
        'imagen',
    ];
}