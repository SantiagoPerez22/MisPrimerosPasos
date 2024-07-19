<?php

namespace App\Http\Controllers;

use App\Models\Sala;
use Illuminate\Http\Request;

class SalaController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view sala|create sala|edit sala|delete sala', ['only' => ['index','show']]);
        $this->middleware('permission:create sala', ['only' => ['create','store']]);
        $this->middleware('permission:edit sala', ['only' => ['edit','update']]);
        $this->middleware('permission:delete sala', ['only' => ['destroy']]);
    }

    public function index()
    {
        $salas = Sala::all();
        return view('salas.index', compact('salas'));
    }

    public function create()
    {
        return view('salas.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required|integer',
        ]);

        Sala::create($request->all());

        return redirect()->route('salas.index')
            ->with('success', 'Sala creada exitosamente.');
    }

    public function show(Sala $sala)
    {
        return view('salas.show', compact('sala'));
    }

    public function edit(Sala $sala)
    {
        return view('salas.edit', compact('sala'));
    }

    public function update(Request $request, Sala $sala)
    {
        $request->validate([
            'numero' => 'required|integer',
        ]);

        $sala->update($request->all());

        return redirect()->route('salas.index')
            ->with('success', 'Sala actualizada exitosamente.');
    }

    public function destroy(Sala $sala)
    {
        $sala->delete();

        return redirect()->route('salas.index')
            ->with('success', 'Sala eliminada exitosamente.');
    }
}
