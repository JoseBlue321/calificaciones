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
            'nombre'=>'anatomia',
            'detalle'=>'primer año de anatomia - Dr. Choque',
            'patron'=>'url del patron',
        ]);
    }
}
