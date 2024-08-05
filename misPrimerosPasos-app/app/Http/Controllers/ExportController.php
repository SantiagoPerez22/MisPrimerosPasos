<?php

namespace App\Http\Controllers;

use App\Models\TutorAlumno;
use PDF;
use Illuminate\Http\Request;

class ExportController extends Controller
{
    public function exportarPDF(Request $request)
    {
        $id_tutor_alumno = $request->input('id_alumno');

        // Obtener el modelo TutorAlumno usando el id de la tabla tutor_alumno
        $tutorAlumno = TutorAlumno::with([
            'alumno',
            'tutor1',
            'tutor2',
            'nivel',
            'observaciones',
            'informesSemanales',
            'informesDiarios',
            'enfermedades',
            'alergias',
            'asistencias'
        ])->find($id_tutor_alumno);

        // Verificar si se encontraron datos
        if (!$tutorAlumno) {
            return response()->json(['error' => 'No se encontraron datos para el ID del alumno especificado'], 404);
        }

        // Generar el PDF
        $pdf = PDF::loadView('pdf', compact('tutorAlumno'));

        // Descargar el PDF
        return $pdf->download('reporte.pdf');
    }
}
