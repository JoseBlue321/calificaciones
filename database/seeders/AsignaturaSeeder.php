<?php

namespace Database\Seeders;

use App\Models\Asignatura;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AsignaturaSeeder extends Seeder
{
    public function run(): void
    {
        Asignatura::create([
            'nombre'=>'ANATOMIA',
            'detalle'=>'PRIMER PARCIAL PRIMER AÑO  - DR. Choque',
            'patron'=>'url del patron',
        ]);

        Asignatura::create([
            'nombre'=>'FISIOLOGIA',
            'detalle'=>'PRIMER PARCIAL SEGUNDO AÑO  - DR. PEREZ',
            'patron'=>'url del patron',
        ]);

        Asignatura::create([
            'nombre'=>'BIOLOGIA',
            'detalle'=>'PRIMER PARCIAL TERCER AÑO  - DR. LOZA',
            'patron'=>'url del patron',
        ]);
    }
}
