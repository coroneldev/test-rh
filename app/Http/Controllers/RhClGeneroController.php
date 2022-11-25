<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhClGenero;

class RhClGeneroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $generos = RhClGenero::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de generos recuperadas exitosamente',
            'data'      => $generos
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
        $genero = new RhClGenero();

        $genero->sigla        = $request->sigla;
        $genero->nombre       = $request->nombre;

        $genero->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $genero
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
        $genero = RhClGenero::find($id);

        if (is_null($genero)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $genero
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
        $genero = RhClGenero::find($id);

        if (is_null($genero)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $genero->sigla     = $request->sigla;
        $genero->nombre    = $request->nombre;

        $genero->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $genero
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
        $genero = RhClGenero::find($id);

        if (is_null($genero)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de persona no encontrado'
            ], 404);
        }

        $genero->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de persona eliminado exitosamente',
            'data'      => $genero
        ], 200);
    }
}
