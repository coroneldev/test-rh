<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhClEstadoCivil;

class RhClEstadoCivilController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $estadoCivil = RhClEstadoCivil::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de estados civiles recuperados exitosamente',
            'data'      => $estadoCivil
        ], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $estadoCivil = new RhClEstadoCivil();
        $estadoCivil->sigla        = $request->sigla;
        $estadoCivil->nombre       = $request->nombre;

        $estadoCivil->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $estadoCivil
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $estadoCivil = RhClEstadoCivil::find($id);

        if (is_null($estadoCivil)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $estadoCivil
        ], 200);
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
        $estadoCivil = RhClEstadoCivil::find($id);

        if (is_null($estadoCivil)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $estadoCivil->sigla     = $request->sigla;
        $estadoCivil->nombre    = $request->nombre;

        $estadoCivil->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $estadoCivil
        ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
