<?php

namespace App\Http\Controllers;

use App\Models\InformeDiario;
use App\Models\Condicion;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class InformeDiarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view informe_diario|create informe_diario|edit informe_diario|delete informe_diario', ['only' => ['index','show']]);
        $this->middleware('permission:create informe_diario', ['only' => ['create','store']]);
        $this->middleware('permission:edit informe_diario', ['only' => ['edit','update']]);
        $this->middleware('permission:delete informe_diario', ['only' => ['destroy']]);
    }

    public function index()
    {
        $informesDiarios = InformeDiario::with(['condicion', 'alumno.alumno', 'user'])->get();
        return view('informes_diarios.index', compact('informesDiarios'));
    }

    public function create()
    {
        $condiciones = Condicion::all();
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('informes_diarios.create', compact('condiciones', 'tutoresAlumnos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_condicion' => 'required|exists:condicion,id',
            'id_alumno' => 'required|exists:tutor_alumno,id',
            'observaciones' => 'required|string',
            'fecha' => 'required|date',
            'imagen' => 'nullable|image|max:2048', // Validación para la imagen
        ]);

        $data = $request->all();
        $data['id_cuenta'] = Auth::id();

        if ($request->hasFile('imagen')) {
            $path = $request->file('imagen')->store('diario', 'public');
            $data['imagen'] = $path;
        }

        InformeDiario::create($data);

        return redirect()->route('informes_diarios.index')
            ->with('success', 'Informe Diario creado exitosamente.');
    }

    public function show($id)
    {
        $informeDiario = InformeDiario::findOrFail($id);
        return view('informes_diarios.show', compact('informeDiario'));
    }

    public function edit($id)
    {
        $informeDiario = InformeDiario::findOrFail($id);
        $condiciones = Condicion::all();
        $tutoresAlumnos = TutorAlumno::with('alumno')->get();
        return view('informes_diarios.edit', compact('informeDiario', 'condiciones', 'tutoresAlumnos'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_condicion' => 'required|exists:condicion,id',
            'id_alumno' => 'required|exists:tutor_alumno,id',
            'observaciones' => 'required|string',
            'fecha' => 'required|date',
            'imagen' => 'nullable|image|max:2048', // Validación para la imagen
        ]);

        $informeDiario = InformeDiario::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('imagen')) {
            if ($informeDiario->imagen) {
                Storage::disk('public')->delete($informeDiario->imagen);
            }
            $path = $request->file('imagen')->store('diario', 'public');
            $data['imagen'] = $path;
        }

        $informeDiario->update($data);

        return redirect()->route('informes_diarios.index')
            ->with('success', 'Informe Diario actualizado exitosamente.');
    }

    public function destroy($id)
    {
        $informeDiario = InformeDiario::findOrFail($id);
        if ($informeDiario->imagen) {
            Storage::disk('public')->delete($informeDiario->imagen);
        }
        $informeDiario->delete();

        return redirect()->route('informes_diarios.index')
            ->with('success', 'Informe Diario eliminado exitosamente.');
    }
}
