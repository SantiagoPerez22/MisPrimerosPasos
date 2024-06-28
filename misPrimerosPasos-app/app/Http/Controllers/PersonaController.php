<?php

// app/Http/Controllers/PersonaController.php
namespace App\Http\Controllers;

use App\Models\Persona; // Asegúrate de importar el modelo Persona
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function create()
    {
        return view('personas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre1' => 'required|string|max:50',
            'nombre2' => 'nullable|string|max:50',
            'apellido1' => 'required|string|max:50',
            'apellido2' => 'nullable|string|max:50',
            'edad' => 'required|integer',
            'rut' => 'required|string|max:12',
            'telefono' => 'required|string|max:15',
            'email' => 'required|string|email|max:100|unique:personas',
        ]);

        Persona::create($request->all());

        return redirect()->route('dashboard')->with('success', 'Persona creada exitosamente.');
    }
}
