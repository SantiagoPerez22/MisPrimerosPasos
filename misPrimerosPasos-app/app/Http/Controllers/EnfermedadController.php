<?php

namespace App\Http\Controllers;

use App\Models\Enfermedad;
use App\Models\TutorAlumno;
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
        $enfermedades = Enfermedad::with('alumno.alumno')->get();
        return view('enfermedades.index', compact('enfermedades'));
    }

    public function create()
    {
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('enfermedades.create', compact('tutoresAlumnos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required|exists:tutor_alumno,id',
        ]);

        Enfermedad::create($request->all());

        return redirect()->route('enfermedades.index')
            ->with('success', 'Enfermedad creada exitosamente.');
    }

    public function show($id)
    {
        $enfermedad = Enfermedad::with('alumno.alumno')->findOrFail($id);
        return view('enfermedades.show', compact('enfermedad'));
    }

    public function edit($id)
    {
        $enfermedad = Enfermedad::findOrFail($id);
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('enfermedades.edit', compact('enfermedad', 'tutoresAlumnos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required|exists:tutor_alumno,id',
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
