<?php

namespace App\Http\Controllers;

use App\Models\Observacion;
use App\Models\Clase;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ObservacionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view observacion')->only(['index', 'show']);
        $this->middleware('permission:create observacion')->only(['create', 'store']);
        $this->middleware('permission:edit observacion')->only(['edit', 'update']);
        $this->middleware('permission:delete observacion')->only(['destroy']);
    }

    public function index()
    {
        $observaciones = Observacion::with(['clase.nivel', 'alumno.alumno', 'cuenta'])->get();
        return view('observaciones.index', compact('observaciones'));
    }

    public function create()
    {
        $clases = Clase::all();
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('observaciones.create', compact('clases', 'tutoresAlumnos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_clase' => 'required|exists:clase,id',
            'id_alumno' => 'required|exists:tutor_alumno,id',
            'observaciones' => 'required|string',
            'fecha' => 'required|date',
        ]);

        $data = $request->all();
        $data['id_cuenta'] = Auth::id();

        Observacion::create($data);

        return redirect()->route('observaciones.index')
            ->with('success', 'Observación creada exitosamente.');
    }

    public function show($id)
    {
        $observacion = Observacion::with(['clase.nivel', 'alumno.alumno', 'cuenta'])->findOrFail($id);
        return view('observaciones.show', compact('observacion'));
    }

    public function edit($id)
    {
        $observacion = Observacion::with(['clase.nivel', 'alumno.alumno', 'cuenta'])->findOrFail($id);
        $clases = Clase::with('nivel')->get();
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('observaciones.edit', compact('observacion', 'clases', 'tutoresAlumnos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_clase' => 'required|exists:clase,id',
            'id_alumno' => 'required|exists:tutor_alumno,id',
            'observaciones' => 'required|string',
            'fecha' => 'required|date',
        ]);

        $observacion = Observacion::findOrFail($id);
        $data = $request->all();

        $observacion->update($data);

        return redirect()->route('observaciones.index')
            ->with('success', 'Observación actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $observacion = Observacion::findOrFail($id);
        $observacion->delete();

        return redirect()->route('observaciones.index')
            ->with('success', 'Observación eliminada exitosamente.');
    }
}
