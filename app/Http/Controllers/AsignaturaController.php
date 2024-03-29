<?php

namespace App\Http\Controllers;

use App\Models\Asignatura;
use App\Models\Persona;
use Illuminate\Http\Request;

class AsignaturaController extends Controller
{
    public function index()
    {
        $asignaturas = Asignatura::all();
        return view('home',['asignaturas'=>$asignaturas]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        $asignatura = Asignatura::findOrFail($id);
        $personas = $asignatura->personas()->get();
        return view('asignatura',[
            'asignatura'=>$asignatura,
            'personas'=>$personas,
        ]);
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, string $id)
    {
        //
    }

    public function destroy(string $id)
    {
        //
    }
}
