<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhTrnDatoLaboral;

class RhTrnDatoLaboralController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datosLaborales = RhTrnDatoLaboral::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de datos laborales recuperadas exitosamente',
            'data'      => $datosLaborales
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
        $datoLaboral = new RhTrnDatoLaboral();

        $datoLaboral->fecha_inicio                    = $request->fecha_inicio;
        $datoLaboral->fecha_fin                       = $request->fecha_fin;
        $datoLaboral->motivo_desvinculacion           = $request->motivo_desvinculacion;
        $datoLaboral->persona_id                      = $request->persona_id;
        $datoLaboral->cargo_id                        = $request->cargo_id;
        $datoLaboral->estructura_organizacional_id    = $request->estructura_organizacional_id;
        $datoLaboral->tipo_contrato_id                = $request->tipo_contrato_id;
        $datoLaboral->adjunto_id                      = $request->adjunto_id;
        $datoLaboral->estado_id                       = $request->estado_id;
        $datoLaboral->horario_id                      = $request->horario_id;
        $datoLaboral->organizmo_financiador_id        = $request->organizmo_financiador_id;
        $datoLaboral->puesto_id                       = $request->puesto_id;
        $datoLaboral->acceso_id                       = $request->acceso_id;
        $datoLaboral->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $datoLaboral
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
        $datoLaboral = RhTrnDatoLaboral::find($id);

        if (is_null($datoLaboral)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $datoLaboral
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
        $datoLaboral = RhTrnDatoLaboral::find($id);

        if (is_null($datoLaboral)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $datoLaboral->fecha_inicio                    = $request->fecha_inicio;
        $datoLaboral->fecha_fin                       = $request->fecha_fin;
        $datoLaboral->motivo_desvinculacion           = $request->motivo_desvinculacion;
        $datoLaboral->persona_id                      = $request->persona_id;
        $datoLaboral->cargo_id                        = $request->cargo_id;
        $datoLaboral->estructura_organizacional_id    = $request->estructura_organizacional_id;
        $datoLaboral->tipo_contrato_id                = $request->tipo_contrato_id;
        $datoLaboral->adjunto_id                      = $request->adjunto_id;
        $datoLaboral->estado_id                       = $request->estado_id;
        $datoLaboral->horario_id                      = $request->horario_id;
        $datoLaboral->organizmo_financiador_id        = $request->organizmo_financiador_id;
        $datoLaboral->puesto_id                       = $request->puesto_id;
        $datoLaboral->acceso_id                       = $request->acceso_id;
        $datoLaboral->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $datoLaboral
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
        $datoLaboral = RhTrnDatoLaboral::find($id);

        if (is_null($datoLaboral)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de dato laboral no encontrado'
            ], 404);
        }

        $datoLaboral->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de dato laboral eliminado exitosamente',
            'data'      => $datoLaboral
        ], 200);
    }
}
