<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index()
    {
        $personas = Persona::all();
        return view('personas.index', compact('personas'));
    }

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
            'rut' => 'required|string|unique:personas,rut',
            'telefono' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:100|unique:personas,email',
            'domicilio_id' => 'nullable',
        ]);

        Persona::create($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Persona creada exitosamente.');
    }

    public function show($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.show', compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        return view('personas.edit', compact('persona'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre1' => 'required|string|max:50',
            'nombre2' => 'nullable|string|max:50',
            'apellido1' => 'required|string|max:50',
            'apellido2' => 'nullable|string|max:50',
            'edad' => 'required|integer',
            'rut' => 'required|string|unique:personas,rut,'.$id,
            'telefono' => 'nullable|string|max:15',
            'email' => 'required|string|email|max:100|unique:personas,email,'.$id,
            'domicilio_id' => 'nullable',
        ]);

        $persona = Persona::findOrFail($id);
        $persona->update($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Persona actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $persona = Persona::findOrFail($id);
        $persona->delete();

        return redirect()->route('personas.index')
            ->with('success', 'Persona eliminada exitosamente.');
    }
}
