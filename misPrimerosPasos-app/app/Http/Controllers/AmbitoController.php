<?php

namespace App\Http\Controllers;

use App\Models\Ambito;
use Illuminate\Http\Request;

class AmbitoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ambitos = Ambito::all();
        return view('ambitos.index', compact('ambitos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ambitos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        Ambito::create($request->all());

        return redirect()->route('ambitos.index')
            ->with('success', 'Ámbito creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ambito $ambito)
    {
        return view('ambitos.show', compact('ambito'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ambito $ambito)
    {
        return view('ambitos.edit', compact('ambito'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ambito $ambito)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $ambito->update($request->all());

        return redirect()->route('ambitos.index')
            ->with('success', 'Ámbito actualizado correctamente.');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ambito $ambito)
    {
        $ambito->delete();

        return redirect()->route('ambitos.index')
            ->with('success', 'Ambito eliminado correctamente.');
    }
}
