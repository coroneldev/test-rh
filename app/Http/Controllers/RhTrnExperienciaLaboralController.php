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
        $experiencias = RhTrnExperienciaLaboral::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de experiencias recuperados exitosamente',
            'data'      => $experiencias
        ], 200);
    }


    public function experienciaLaboralPersonaId($id)
    {
        $experiencia = RhTrnExperienciaLaboral::where('persona_id', $id)->get();

        if (is_null($experiencia)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de experiencias recuperados exitosamente',
            'data'      => $experiencia
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
        $experiencia = RhTrnExperienciaLaboral::find($id);

        if (is_null($experiencia)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
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
        //
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
