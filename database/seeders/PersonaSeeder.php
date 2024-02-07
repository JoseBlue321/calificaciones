<?php

namespace Database\Seeders;

use App\Models\Persona;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PersonaSeeder extends Seeder
{
    public function run(): void
    {
        Persona::create([
            'asignatura_id'=>1,
            'carnet'=>'12345',
            'nombre'=>'jose',
            'paterno'=>'apaza',
            'materno'=>'saavedra',
            'nota'=>20,
            'imagen'=>'url de la img',
        ]);
        
    }
}
