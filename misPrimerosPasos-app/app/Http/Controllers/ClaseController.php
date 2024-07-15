<?php

namespace App\Http\Controllers;

use App\Models\Clase;
use App\Models\Ambito;
use App\Models\Nucleo;
use App\Models\Nivel;
use App\Models\Sala;
use App\Models\User;
use Illuminate\Http\Request;

class ClaseController extends Controller
{
    public function index()
    {
        $clases = Clase::with(['ambito', 'nucleo', 'nivel', 'profesor', 'asistente1', 'asistente2', 'sala'])->get();
        return view('clases.index', compact('clases'));
    }

    public function create()
    {
        $ambitos = Ambito::all();
        $nucleos = Nucleo::all();
        $niveles = Nivel::all();
        $salas = Sala::all();
        $users = User::all();
        return view('clases.create', compact('ambitos', 'nucleos', 'niveles', 'salas', 'users'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'id_ambito' => 'required|exists:ambito,id',
            'id_nucleo' => 'required|exists:nucleo,id',
            'id_nivel' => 'required|exists:nivel,id',
            'id_profesor' => 'required|exists:users,id',
            'id_asistente1' => 'nullable|exists:users,id',
            'id_asistente2' => 'nullable|exists:users,id',
            'id_sala' => 'required|exists:sala,id',
            'objetivo' => 'nullable|string',
            'observaciones' => 'nullable|string',
            'fecha' => 'required|date',
        ]);

        Clase::create($request->all());

        return redirect()->route('clases.index')
            ->with('success', 'Clase creada exitosamente.');
    }

    public function show($id)
    {
        $clase = Clase::with(['ambito', 'nucleo', 'nivel', 'profesor', 'asistente1', 'asistente2', 'sala'])->findOrFail($id);
        return view('clases.show', compact('clase'));
    }

    public function edit($id)
    {
        $clase = Clase::with(['ambito', 'nucleo', 'nivel', 'profesor', 'asistente1', 'asistente2', 'sala'])->findOrFail($id);
        $ambitos = Ambito::all();
        $nucleos = Nucleo::all();
        $niveles = Nivel::all();
        $salas = Sala::all();
        $users = User::all();
        return view('clases.edit', compact('clase', 'ambitos', 'nucleos', 'niveles', 'salas', 'users'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'id_ambito' => 'required|exists:ambito,id',
            'id_nucleo' => 'required|exists:nucleo,id',
            'id_nivel' => 'required|exists:nivel,id',
            'id_profesor' => 'required|exists:users,id',
            'id_asistente1' => 'nullable|exists:users,id',
            'id_asistente2' => 'nullable|exists:users,id',
            'id_sala' => 'required|exists:sala,id',
            'objetivo' => 'nullable|string',
            'observaciones' => 'nullable|string',
            'fecha' => 'required|date',
        ]);

        $clase = Clase::findOrFail($id);
        $clase->update($request->all());

        return redirect()->route('clases.index')
            ->with('success', 'Clase actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $clase = Clase::findOrFail($id);
        $clase->delete();

        return redirect()->route('clases.index')
            ->with('success', 'Clase eliminada exitosamente.');
    }
}
