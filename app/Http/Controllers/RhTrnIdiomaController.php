<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhTrnIdioma;

class RhTrnIdiomaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $idiomasPersonas = RhTrnIdioma::all()->first()::with('persona', 'idioma', 'adjunto', 'estado')->first();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro de idiomas personas recuperadas exitosamente',
            'data'      => $idiomasPersonas
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
        $idiomasPersonas = new RhTrnIdioma();

        $idiomasPersonas->nivel_conocimiento  = $request->nivel_conocimiento;
        $idiomasPersonas->persona_id          = $request->persona_id;
        $idiomasPersonas->idioma_id           = $request->idioma_id;
        if ($request->adjunto_id != 0) {
            $idiomasPersonas->adjunto_id      = $request->adjunto_id;
        }
        $idiomasPersonas->estado_id           = $request->estado_id;
        $idiomasPersonas->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $idiomasPersonas
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
        $idiomaPersona = RhTrnIdioma::find($id)::with('persona', 'idioma', 'adjunto', 'estado')->first();

        if (is_null($idiomaPersona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $idiomaPersona
        ], 200);
    }

    public function idiomaPersonaId($id)
    {
        $idiomaPersona = RhTrnIdioma::find($id)::with('persona', 'idioma', 'adjunto', 'estado')->first();

        if (is_null($idiomaPersona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 200);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de experiencias recuperados exitosamente',
            'data'      => $idiomaPersona
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
        $idiomaPersona = RhtrnIdioma::find($id);

        if (is_null($idiomaPersona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $idiomaPersona->nivel_conocimiento   = $request->nivel_conocimiento;
        $idiomaPersona->persona_id           = $request->persona_id;
        $idiomaPersona->idioma_id            = $request->idioma_id;
        $idiomaPersona->adjunto_id           = $request->adjunto_id;
        $idiomaPersona->estado_id            = $request->estado_id;
        $idiomaPersona->verificado          = $request->verificado;
        $idiomaPersona->editable            = $request->editable;
        $idiomaPersona->observacion         = $request->observacion;
        $idiomaPersona->sol_edicion         = $request->sol_edicion;
        $idiomaPersona->motivo_sol          = $request->motivo_sol;

        $idiomaPersona->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $idiomaPersona
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
        $idiomaPersona = RhtrnIdioma::find($id);

        if (is_null($idiomaPersona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de persona no encontrado'
            ], 404);
        }

       // $idiomaPersona->activo   = false;
        $idiomaPersona->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de persona eliminado exitosamente',
            'data'      => $idiomaPersona
        ], 200);
    }
}
