<?php

namespace App\Http\Controllers;

use App\Models\Nucleo;
use Illuminate\Http\Request;

class NucleoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nucleos = Nucleo::all();
        return view('nucleos.index', compact('nucleos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('nucleos.create');
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

        Nucleo::create($request->all());

        return redirect()->route('nucleos.index')
            ->with('success', 'Nucleo creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Nucleo $nucleo)
    {
        return view('nucleos.show', compact('nucleo'));
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Nucleo $nucleo)
    {
        return view('nucleos.edit', compact('nucleo'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nucleo $nucleo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string'
        ]);

        $nucleo->update($request->all());

        return redirect()->route('nucleos.index')
            ->with('success', 'Nucleo actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nucleo $nucleo)
    {
        $nucleo->delete();

        return redirect()->route('nucleos.index')
            ->with('success', 'Nucleo eliminado correctamente.');
    }
}
