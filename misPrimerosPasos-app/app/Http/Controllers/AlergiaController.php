<?php

namespace App\Http\Controllers;

use App\Models\Alergia;
use App\Models\TutorAlumno;
use Illuminate\Http\Request;

class AlergiaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alergias = Alergia::all();
        return view('alergias.index', compact('alergias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $alumnos = TutorAlumno::all();
        return view('alergias.create', compact('alumnos'));
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
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required|integer|exists:tutor_alumno,id'
        ]);

        Alergia::create($request->all());

        return redirect()->route('alergias.index')
            ->with('success', 'Alergia creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Alergia $alergia)
    {
        return view('alergias.show', compact('alergia'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Alergia $alergia)
    {
        $alumnos = TutorAlumno::all();
        return view('alergias.edit', compact('alergia', 'alumnos'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Alergia $alergia)
    {
        $request->validate([
            'nombre' => 'required|string|max:255',
            'descripcion' => 'nullable|string',
            'id_alumno' => 'required|integer|exists:tutor_alumno,id'
        ]);

        $alergia->update($request->all());

        return redirect()->route('alergias.index')
            ->with('success', 'Alergia actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Alergia $alergia)
    {
        $alergia->delete();

        return redirect()->route('alergias.index')
            ->with('success', 'Alergia eliminada correctamente.');
    }
}
