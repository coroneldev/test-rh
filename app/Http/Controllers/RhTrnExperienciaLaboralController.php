<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhTrnExperienciaLaboral;

class RhTrnExperienciaLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experiencias = RhTrnExperienciaLaboral::all()->first()::with('persona', 'adjunto')->first();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro de experiencias recuperados exitosamente',
            'data'      => $experiencias
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
        $experiencia = new RhTrnExperienciaLaboral();

        $experiencia->lugar_trabajo            = $request->lugar_trabajo;
        $experiencia->fecha_inicio             = $request->fecha_inicio;
        $experiencia->fecha_fin                = $request->fecha_fin;
        $experiencia->cargo_desempeniado       = $request->cargo_desempeniado;
        $experiencia->funcion_desempeniada     = $request->funcion_desempeniada;
        $experiencia->nombre_inmediato_sup     = $request->nombre_inmediato_sup;
        $experiencia->cargo_inmediato_sup      = $request->cargo_inmediato_sup;
        $experiencia->salario_percibido        = $request->salario_percibido;
        $experiencia->motivo_desvinculacion    = $request->motivo_desvinculacion;
        $experiencia->persona_id               = $request->persona_id;
        if($request->adjunto_id != 0){
            $experiencia->adjunto_id           = $request->adjunto_id;
        }

        $experiencia->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $experiencia
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
        $experiencia = RhTrnExperienciaLaboral::find($id)::with('persona', 'adjunto')->first();
        
        if (is_null($experiencia)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $experiencia
        ], 200);
    }
    
    public function experienciasLaboralesPersonaId($id)
    {
        $experiencia = RhTrnExperienciaLaboral::where('persona_id', $id)->first()->with('persona', 'adjunto')->first();
        if (is_null($experiencia)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de experiencias recuperados exitosamente',
            'data'      => $experiencia
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
        $experiencia = RhTrnExperienciaLaboral::find($id);

        if (is_null($experiencia)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 200);
        }
        $experiencia->lugar_trabajo            = $request->lugar_trabajo;
        $experiencia->fecha_inicio             = $request->fecha_inicio;
        $experiencia->fecha_fin                = $request->fecha_fin;
        $experiencia->cargo_desempeniado       = $request->cargo_desempeniado;
        $experiencia->funcion_desempeniada     = $request->funcion_desempeniada;
        $experiencia->nombre_inmediato_sup     = $request->nombre_inmediato_sup;
        $experiencia->cargo_inmediato_sup      = $request->cargo_inmediato_sup;
        $experiencia->salario_percibido        = $request->salario_percibido;
        $experiencia->motivo_desvinculacion    = $request->motivo_desvinculacion;
        $experiencia->persona_id               = $request->persona_id;

        if($request->adjunto_id != 0){
            $experiencia->adjunto_id               = $request->adjunto_id;
        }

        $experiencia->verificado          = $request->verificado;
        $experiencia->editable            = $request->editable;
        $experiencia->observacion         = $request->observacion;
        $experiencia->sol_edicion         = $request->sol_edicion;
        $experiencia->motivo_sol          = $request->motivo_sol;
        $experiencia->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $experiencia
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
        $experiencia = RhTrnExperienciaLaboral::find($id);

        if (is_null($experiencia)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de experiencia no encontrado'
            ], 404);
        }

        $experiencia->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de experiencia eliminado exitosamente',
            'data'      => $experiencia
        ], 200);
    }
}
