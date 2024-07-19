<?php

namespace App\Http\Controllers;

use App\Models\Condicion;
use Illuminate\Http\Request;

class CondicionController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view condicion|create condicion|edit condicion|delete condicion', ['only' => ['index','show']]);
        $this->middleware('permission:create condicion', ['only' => ['create','store']]);
        $this->middleware('permission:edit condicion', ['only' => ['edit','update']]);
        $this->middleware('permission:delete condicion', ['only' => ['destroy']]);
    }

    public function index()
    {
        $condiciones = Condicion::all();
        return view('condiciones.index', compact('condiciones'));
    }

    public function create()
    {
        return view('condiciones.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
        ]);

        Condicion::create($request->all());

        return redirect()->route('condiciones.index')
            ->with('success', 'Condición creada exitosamente.');
    }

    public function show($id)
    {
        $condicion = Condicion::findOrFail($id);
        return view('condiciones.show', compact('condicion'));
    }

    public function edit($id)
    {
        $condicion = Condicion::findOrFail($id);
        return view('condiciones.edit', compact('condicion'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string',
        ]);

        $condicion = Condicion::findOrFail($id);
        $condicion->update($request->all());

        return redirect()->route('condiciones.index')
            ->with('success', 'Condición actualizada exitosamente.');
    }

    public function destroy($id)
    {
        $condicion = Condicion::findOrFail($id);
        $condicion->delete();

        return redirect()->route('condiciones.index')
            ->with('success', 'Condición eliminada exitosamente.');
    }
}
