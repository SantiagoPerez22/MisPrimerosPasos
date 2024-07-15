<?php

namespace App\Http\Controllers;

use App\Models\InformeSemanal;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InformeSemanalController extends Controller
{
    public function index()
    {
        $informesSemanales = InformeSemanal::with(['alumno.alumno', 'user'])->get();
        return view('informes_semanales.index', compact('informesSemanales'));
    }

    public function create()
    {
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('informes_semanales.create', compact('tutoresAlumnos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_alumno' => 'required|exists:tutor_alumno,id',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'fecha' => 'required|date',
        ]);

        $data = $request->all();
        $data['id_cuenta'] = Auth::id();

        InformeSemanal::create($data);

        return redirect()->route('informes_semanales.index')
            ->with('success', 'Informe Semanal creado exitosamente.');
    }

    public function show($id)
    {
        $informeSemanal = InformeSemanal::findOrFail($id);
        return view('informes_semanales.show', compact('informeSemanal'));
    }

    public function edit($id)
    {
        $informeSemanal = InformeSemanal::findOrFail($id);
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('informes_semanales.edit', compact('informeSemanal', 'tutoresAlumnos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_alumno' => 'required|exists:tutor_alumno,id',
            'altura' => 'required|numeric',
            'peso' => 'required|numeric',
            'fecha' => 'required|date',
        ]);

        $informeSemanal = InformeSemanal::findOrFail($id);
        $data = $request->all();

        $informeSemanal->update($data);

        return redirect()->route('informes_semanales.index')
            ->with('success', 'Informe Semanal actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $informeSemanal = InformeSemanal::findOrFail($id);
        $informeSemanal->delete();

        return redirect()->route('informes_semanales.index')
            ->with('success', 'Informe Semanal eliminado exitosamente.');
    }
}
