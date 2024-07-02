<?php

namespace App\Http\Controllers;

use App\Models\Cuenta;
use App\Models\Persona;
use App\Models\Rol;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CuentaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cuentas = Cuenta::with(['persona', 'rol'])->get();
        return view('cuentas.index', compact('cuentas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $personas = Persona::all();
        $roles = Rol::all();
        return view('cuentas.create', compact('personas', 'roles'));
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
            'id_persona' => 'required|integer',
            'email' => 'required|email|unique:cuentas',
            'password' => 'required|string|min:8',
            'rol_id' => 'required|integer'
        ]);

        $cuenta = new Cuenta();
        $cuenta->id_persona = $request->id_persona;
        $cuenta->email = $request->email;
        $cuenta->password = bcrypt($request->password);
        $cuenta->rol_id = $request->rol_id;
        $cuenta->save();

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta creada correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cuenta = Cuenta::with(['persona', 'rol'])->findOrFail($id);
        return view('cuentas.show', compact('cuenta'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cuenta = Cuenta::with(['persona', 'rol'])->findOrFail($id);
        $personas = Persona::all();
        $roles = Rol::all();
        return view('cuentas.edit', compact('cuenta', 'personas', 'roles'));
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
            'id_persona' => 'required|integer',
            'email' => 'required|email|unique:cuentas,email,'.$id,
            'password' => 'nullable|string|min:8',
            'rol_id' => 'required|integer'
        ]);

        $cuenta = Cuenta::findOrFail($id);
        $cuenta->id_persona = $request->id_persona;
        $cuenta->email = $request->email;
        if ($request->password) {
            $cuenta->password = bcrypt($request->password);
        }
        $cuenta->rol_id = $request->rol_id;
        $cuenta->save();

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta actualizada correctamente.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cuenta = Cuenta::findOrFail($id);
        $cuenta->delete();

        return redirect()->route('cuentas.index')
            ->with('success', 'Cuenta eliminada correctamente.');
    }
}
