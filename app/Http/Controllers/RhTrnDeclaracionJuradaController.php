<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhTrnDeclaracionJurada;

class RhTrnDeclaracionJuradaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $declaraciones = RhTrnDeclaracionJurada::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de declaraciones recuperadas exitosamente',
            'data'      => $declaraciones
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
        $declaracion = new RhTrnDeclaracionJurada();

        $declaracion->nombre           = $request->nombre;
        $declaracion->fecha_inicio     = $request->fecha_inicio;
        $declaracion->fecha_fin        = $request->fecha_fin;
        $declaracion->adjunto_id       = $request->adjunto_id;
        $declaracion->persona_id       = $request->persona_id;

        $declaracion->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $declaracion
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
        $declaracion = RhTrnDeclaracionJurada::find($id);

        if (is_null($declaracion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $declaracion
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
        $declaracion = RhTrnDeclaracionJurada::find($id);

        if (is_null($declaracion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $declaracion->nombre           = $request->nombre;
        $declaracion->fecha_inicio     = $request->fecha_inicio;
        $declaracion->fecha_fin        = $request->fecha_fin;
        $declaracion->adjunto_id       = $request->adjunto_id;
        $declaracion->persona_id       = $request->persona_id;

        $declaracion->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $declaracion
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
        $declaracion = RhTrnDeclaracionJurada::find($id);

        if (is_null($declaracion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de declaracion no encontrado'
            ], 404);
        }

        $declaracion->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de declaracion eliminado exitosamente',
            'data'      => $declaracion
        ], 200);
    }
}
