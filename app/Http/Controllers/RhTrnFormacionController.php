<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhTrnFormacion;
use App\Models\RhTrnPersona;

class RhTrnFormacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $formaciones = RhtrnFormacion::all()->load('persona', 'pais', 'ciudad', 'estado', 'grado', 'institucion', 'adjunto');

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de formaciones recuperadas exitosamente',
            'data'      => $formaciones
        ], 200);
    }

    public function formacionPersonal($id)
    {
        $persona = RhTrnPersona::find($id);

        if (is_null($persona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      =>  RhtrnFormacion::all()->load('persona', 'pais', 'ciudad', 'estado', 'grado', 'institucion', 'adjunto')
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
        $formacion = new RhtrnFormacion();

        $formacion->fecha_inicio              = $request->fecha_inicio;
        $formacion->fecha_fin                 = $request->fecha_fin;
        $formacion->provision_nacional        = $request->provision_nacional;
        $formacion->registro_profesinal       = $request->registro_profesinal;
        $formacion->persona_id                = $request->persona_id;
        $formacion->pais_id                   = $request->pais_id;
        $formacion->ciudad_id                 = $request->ciudad_id;
        $formacion->estado_id                 = $request->estado_id;
        $formacion->grado_id                  = $request->grado_id;
        $formacion->institucion_id            = $request->institucion_id;
        $formacion->adjunto_id                = $request->adjunto_id;
        $formacion->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $formacion
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
        $formacion = RhtrnFormacion::find($id);

        if (is_null($formacion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $formacion = RhtrnFormacion::all()->load('persona', 'pais', 'ciudad', 'estado', 'grado', 'institucion', 'adjunto')
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
        $formacion = RhtrnFormacion::find($id);

        if (is_null($formacion)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $formacion->fecha_inicio              = $request->fecha_inicio;
        $formacion->fecha_fin                 = $request->fecha_fin;
        $formacion->provision_nacional        = $request->provision_nacional;
        $formacion->registro_profesinal       = $request->registro_profesinal;
        $formacion->persona_id                = $request->persona_id;
        $formacion->pais_id                   = $request->pais_id;
        $formacion->ciudad_id                 = $request->ciudad_id;
        $formacion->estado_id                 = $request->estado_id;
        $formacion->grado_id                  = $request->grado_id;
        $formacion->institucion_id            = $request->institucion_id;
        $formacion->adjunto_id                = $request->adjunto_id;
        $formacion->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $formacion
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
