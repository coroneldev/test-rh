<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhClParentesco;

class RhClParentescoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentetscos = RhClParentesco::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de parentescos recuperados exitosamente',
            'data'      => $parentetscos
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
        $parentetscos = new RhClParentesco();

        $parentetscos->nombre   = $request->nombre;

        $parentetscos->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $parentetscos
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
        $parentetscos = RhClParentesco::find($id);

        if (is_null($parentetscos)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $parentetscos
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
        $parentetscos = RhClParentesco::find($id);

        if (is_null($parentetscos)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $parentetscos->nombre   = $request->nombre;

        $parentetscos->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $parentetscos
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
        $parentetscos = RhClParentesco::find($id);

        if (is_null($parentetscos)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de persona no encontrado'
            ], 404);
        }

        $parentetscos->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de persona eliminado exitosamente',
            'data'      => $parentetscos
        ], 200);
    }
}
