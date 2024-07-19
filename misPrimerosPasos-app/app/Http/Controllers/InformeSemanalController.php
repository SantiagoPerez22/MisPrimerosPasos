<?php

namespace App\Http\Controllers;

use App\Models\InformeSemanal;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class InformeSemanalController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view informe_semanal|create informe_semanal|edit informe_semanal|delete informe_semanal', ['only' => ['index','show']]);
        $this->middleware('permission:create informe_semanal', ['only' => ['create','store']]);
        $this->middleware('permission:edit informe_semanal', ['only' => ['edit','update']]);
        $this->middleware('permission:delete informe_semanal', ['only' => ['destroy']]);
    }

    public function index()
    {
        $informesSemanales = InformeSemanal::with(['alumno.alumno', 'user'])->get();
        $data = $informesSemanales->pluck('altura', 'peso', 'fecha');
        return view('informes_semanales.index', compact('informesSemanales', 'data'));
    }

    public function showCharts(Request $request)
    {
        $selectedId = $request->input('id_alumno', null);
        $startDate = $request->input('start_date', null);
        $endDate = $request->input('end_date', null);
        $chartType = $request->input('chart_type', 'line');

        $informesSemanales = InformeSemanal::with(['alumno.alumno', 'user'])
            ->when($selectedId, function ($query, $selectedId) {
                return $query->where('id_alumno', $selectedId);
            })
            ->when($startDate, function ($query, $startDate) {
                return $query->whereDate('fecha', '>=', Carbon::parse($startDate));
            })
            ->when($endDate, function ($query, $endDate) {
                return $query->whereDate('fecha', '<=', Carbon::parse($endDate));
            })
            ->orderBy('fecha', 'asc')
            ->get();

        $alumnos = TutorAlumno::with('alumno')->get();

        return view('informes_semanales.charts', compact('informesSemanales', 'alumnos', 'selectedId', 'startDate', 'endDate', 'chartType'));
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
