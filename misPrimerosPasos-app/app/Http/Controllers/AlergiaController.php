<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use Illuminate\Http\Request;

class AlergiaController extends Controller
{
    public function index()
    {
        $alergias = Alergia::all();
        return view('alergias.index', compact('alergias'));
    }

    public function create()
    {
        return view('alergias.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required',
        ]);

        Alergia::create($request->all());

        return redirect()->route('alergias.index')
            ->with('success', 'Alergia creada exitosamente.');
    }

    public function show($id)
    {
        $alergia = Alergia::findOrFail($id);
        return view('alergias.show', compact('alergia'));
    }

    public function edit($id)
    {
        $alergia = Alergia::findOrFail($id);
        return view('alergias.edit', compact('alergia'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required',
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
