<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use Illuminate\Http\Request;

class EnfermedadController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view enfermedad|create enfermedad|edit enfermedad|delete enfermedad', ['only' => ['index','show']]);
        $this->middleware('permission:create enfermedad', ['only' => ['create','store']]);
        $this->middleware('permission:edit enfermedad', ['only' => ['edit','update']]);
        $this->middleware('permission:delete enfermedad', ['only' => ['destroy']]);
    }

    public function index()
    {
        $enfermedades = Enfermedad::all();
        return view('enfermedades.index', compact('enfermedades'));
    }

    public function create()
    {
        return view('enfermedades.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required',
        ]);

        Enfermedad::create($request->all());

        return redirect()->route('enfermedades.index')
            ->with('success', 'Enfermedad creada exitosamente.');
    }

    public function show($id)
    {
        $enfermedad = Enfermedad::findOrFail($id);
        return view('enfermedades.show', compact('enfermedad'));
    }

    public function edit($id)
    {
        $enfermedad = Enfermedad::findOrFail($id);
        return view('enfermedades.edit', compact('enfermedad'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required',
        ]);

        $enfermedad = Enfermedad::findOrFail($id);
        $enfermedad->update($request->all());

        return redirect()->route('enfermedades.index')
            ->with('success', 'Enfermedad actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $enfermedad = Enfermedad::findOrFail($id);
        $enfermedad->delete();

        return redirect()->route('enfermedades.index')
            ->with('success', 'Enfermedad eliminada exitosamente.');
    }
}
