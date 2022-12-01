<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhTrnCurso;

class RhTrnCursosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $cursos = RhTrnCurso::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de cursos recuperadas exitosamente',
            'data'      => $cursos
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
        $curso = new RhTrnCurso();

        $curso->fecha_inicio        = $request->fecha_inicio;
        $curso->fecha_fin           = $request->fecha_fin;
        $curso->nombre              = $request->nombre;
        $curso->duracion            = $request->duracion;
        $curso->estado_id           = $request->estado_id;
        $curso->institucion_id      = $request->institucion_id;
        $curso->persona_id          = $request->persona_id;
        $curso->adjunto_id          = $request->adjunto_id;

        $curso->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $curso
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
        $curso = RhTrnCurso::find($id);

        if (is_null($curso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $curso
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
        $curso = RhTrnCurso::find($id);

        if (is_null($curso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $curso->fecha_inicio        = $request->fecha_inicio;
        $curso->fecha_fin           = $request->fecha_fin;
        $curso->nombre              = $request->nombre;
        $curso->duracion            = $request->duracion;
        $curso->estado_id           = $request->estado_id;
        $curso->institucion_id      = $request->institucion_id;
        $curso->persona_id          = $request->persona_id;
        $curso->adjunto_id          = $request->adjunto_id;

        $curso->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $curso
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
        $curso = RhTrnCurso::find($id);

        if (is_null($curso)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de curso no encontrado'
            ], 404);
        }

        $curso->delete();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de curso eliminado exitosamente',
            'data'      => $curso
        ], 200);
        
    }
}
