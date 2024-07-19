<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:view nivel|create nivel|edit nivel|delete nivel', ['only' => ['index','show']]);
        $this->middleware('permission:create nivel', ['only' => ['create','store']]);
        $this->middleware('permission:edit nivel', ['only' => ['edit','update']]);
        $this->middleware('permission:delete nivel', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $niveles = Nivel::all();
        return view('niveles.index', compact('niveles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('niveles.create');
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
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string'
        ]);

        Nivel::create($request->all());

        return redirect()->route('niveles.index')
            ->with('success', 'Nivel creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $nivel = Nivel::find($id);
        return view('niveles.show', compact('nivel'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $nivel = Nivel::find($id);
        return view('niveles.edit', compact('nivel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nombre' => 'required|string|max:50',
            'descripcion' => 'nullable|string'
        ]);

        $nivel = Nivel::find($id);
        $nivel->update($request->all());

        return redirect()->route('niveles.index')
            ->with('success', 'Nivel actualizado correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nivel = Nivel::find($id);
        if ($nivel) {
            $nivel->delete();
        } else {
            return redirect()->route('niveles.index')
                ->with('error', 'Nivel no encontrado.');
        }

        return redirect()->route('niveles.index')
            ->with('success', 'Nivel eliminado correctamente.');
    }
}
