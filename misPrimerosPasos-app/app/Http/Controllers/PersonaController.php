<?php

namespace App\Http\Controllers;

use App\Models\Persona;
use App\Models\Domicilio;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view persona|create persona|edit persona|delete persona', ['only' => ['index','show']]);
        $this->middleware('permission:create persona', ['only' => ['create','store']]);
        $this->middleware('permission:edit persona', ['only' => ['edit','update']]);
        $this->middleware('permission:delete persona', ['only' => ['destroy']]);
    }

    public function index()
    {
        $personas = Persona::with('domicilio')->get();
        return view('personas.index', compact('personas'));
    }

    public function create()
    {
        $domicilios = Domicilio::all();
        return view('personas.create', compact('domicilios'));
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
            'domicilio_id' => 'nullable|exists:domicilios,id',
        ]);

        Persona::create($request->all());

        return redirect()->route('personas.index')
            ->with('success', 'Persona creada exitosamente.');
    }

    public function show($id)
    {
        $persona = Persona::with('domicilio')->findOrFail($id);
        return view('personas.show', compact('persona'));
    }

    public function edit($id)
    {
        $persona = Persona::findOrFail($id);
        $domicilios = Domicilio::all();
        return view('personas.edit', compact('persona', 'domicilios'));
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
            'domicilio_id' => 'nullable|exists:domicilios,id',
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

