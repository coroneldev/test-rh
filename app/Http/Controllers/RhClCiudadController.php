<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhClCiudad;

class RhClCiudadController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ciudades = RhClCiudad::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de ciudades recuperadas exitosamente',
            'data'      => $ciudades
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
        $ciudad = new RhClCiudad();

        $ciudad->nombre        = $request->nombre;
        $ciudad->sigla         = $request->sigla;

        $ciudad->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $ciudad
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
        $ciudad = RhClCiudad::find($id);

        if (is_null($ciudad)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $ciudad
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
        $ciudad = RhClciudad::find($id);

        if (is_null($ciudad)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $ciudad->nombre    = $request->nombre;
        $ciudad->sigla     = $request->sigla;
        $ciudad->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $ciudad
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
        $ciudad = RhClCiudad::find($id);

        if (is_null($ciudad)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de persona no encontrado'
            ], 404);
        }

        $ciudad->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de persona eliminado exitosamente',
            'data'      => $ciudad
        ], 200);
    }
}
