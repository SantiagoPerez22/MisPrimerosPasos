<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;

class AlergiaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view alergia|create alergia|edit alergia|delete alergia', ['only' => ['index','show']]);
        $this->middleware('permission:create alergia', ['only' => ['create','store']]);
        $this->middleware('permission:edit alergia', ['only' => ['edit','update']]);
        $this->middleware('permission:delete alergia', ['only' => ['destroy']]);
    }

    public function index()
    {
        $alergias = Alergia::with('alumno.alumno')->get();
        return view('alergias.index', compact('alergias'));
    }

    public function create()
    {
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('alergias.create', compact('tutoresAlumnos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required|exists:tutor_alumno,id',
        ]);

        Alergia::create($request->all());

        return redirect()->route('alergias.index')
            ->with('success', 'Alergia creada exitosamente.');
    }

    public function show($id)
    {
        $alergia = Alergia::with('alumno.alumno')->findOrFail($id);
        return view('alergias.show', compact('alergia'));
    }

    public function edit($id)
    {
        $alergia = Alergia::findOrFail($id);
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('alergias.edit', compact('alergia', 'tutoresAlumnos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required|exists:tutor_alumno,id',
        ]);

        $alergia = Alergia::findOrFail($id);
        $alergia->update($request->all());

        return redirect()->route('alergias.index')
            ->with('success', 'Alergia actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $alergia = Alergia::findOrFail($id);
        $alergia->delete();

        return redirect()->route('alergias.index')
            ->with('success', 'Alergia eliminada exitosamente.');
    }
}
