<?php

namespace App\Http\Controllers;

use App\Models\TutorAlumno;
use App\Models\Persona;
use PDF;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportarPDF(Request $request)
    {
        $id_alumno = $request->input('id_alumno');

        // Obtener todos los datos del modelo TutorAlumno para el ID del alumno
        $datos = TutorAlumno::where('id_alumno', $id_alumno)->get();

        // Verificar si se encontraron datos
        if ($datos->isEmpty()) {
            return response()->json(['error' => 'No se encontraron datos para el ID del alumno especificado'], 404);
        }

        // Generar el PDF
        $pdf = PDF::loadView('pdf', compact('datos'));

        // Descargar el PDF
        return $pdf->download('reporte.pdf');
    }
}
