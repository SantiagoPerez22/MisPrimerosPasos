<?php

namespace App\Http\Controllers;

use App\Models\Asistencia;
use App\Models\Clase;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AsistenciaController extends Controller
{
    public function index()
    {
        $asistencias = Asistencia::with(['clase', 'alumno.alumno', 'cuenta'])->get();
        return view('asistencias.index', compact('asistencias'));
    }

    public function create()
    {
        $clases = Clase::all();
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('asistencias.create', compact('clases', 'tutoresAlumnos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_clase' => 'required|exists:clase,id',
            'id_alumno' => 'required|exists:tutor_alumno,id',
            'asistencia' => 'required|in:si,no',
            'fecha' => 'required|date',
        ]);

        $data = $request->all();
        $data['id_cuenta'] = Auth::id();

        Asistencia::create($data);

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia creada exitosamente.');
    }

    public function show($id)
    {
        $asistencia = Asistencia::with(['clase', 'alumno.alumno', 'cuenta'])->findOrFail($id);
        return view('asistencias.show', compact('asistencia'));
    }

    public function edit($id)
    {
        $asistencia = Asistencia::with(['clase', 'alumno.alumno', 'cuenta'])->findOrFail($id);
        $clases = Clase::all();
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('asistencias.edit', compact('asistencia', 'clases', 'tutoresAlumnos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_clase' => 'required|exists:clase,id',
            'id_alumno' => 'required|exists:tutor_alumno,id',
            'asistencia' => 'required|in:si,no',
            'fecha' => 'required|date',
        ]);

        $asistencia = Asistencia::findOrFail($id);
        $data = $request->all();

        $asistencia->update($data);

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $asistencia = Asistencia::findOrFail($id);
        $asistencia->delete();

        return redirect()->route('asistencias.index')
            ->with('success', 'Asistencia eliminada exitosamente.');
    }
}
