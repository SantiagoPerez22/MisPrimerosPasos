<?php

namespace App\Http\Controllers;

use App\Models\Domicilio;
use Illuminate\Http\Request;

class DomicilioController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view domicilio|create domicilio|edit domicilio|delete domicilio', ['only' => ['index','show']]);
        $this->middleware('permission:create domicilio', ['only' => ['create','store']]);
        $this->middleware('permission:edit domicilio', ['only' => ['edit','update']]);
        $this->middleware('permission:delete domicilio', ['only' => ['destroy']]);
    }

    public function index()
    {
        $domicilios = Domicilio::all();
        return view('domicilios.index', compact('domicilios'));
    }

    public function create()
    {
        return view('domicilios.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'codigo_postal' => 'required|string|max:10',
        ]);

        Domicilio::create($request->all());

        return redirect()->route('domicilios.index')
            ->with('success', 'Domicilio creado exitosamente.');
    }

    public function show(Domicilio $domicilio)
    {
        return view('domicilios.show', compact('domicilio'));
    }

    public function edit(Domicilio $domicilio)
    {
        return view('domicilios.edit', compact('domicilio'));
    }

    public function update(Request $request, Domicilio $domicilio)
    {
        $request->validate([
            'direccion' => 'required|string|max:255',
            'ciudad' => 'required|string|max:100',
            'estado' => 'required|string|max:100',
            'codigo_postal' => 'required|string|max:10',
        ]);

        $domicilio->update($request->all());

        return redirect()->route('domicilios.index')
            ->with('success', 'Domicilio actualizado exitosamente.');
    }

    public function destroy(Domicilio $domicilio)
    {
        $domicilio->delete();

        return redirect()->route('domicilios.index')
            ->with('success', 'Domicilio eliminado exitosamente.');
    }
}
