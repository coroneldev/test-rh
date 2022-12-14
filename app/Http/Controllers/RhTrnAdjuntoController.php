<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\RhTrnAdjunto;

class RhTrnAdjuntoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $adjuntos = RhTrnAdjunto::all();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de archivos recuperados exitosamente',
            'data'      => $adjuntos
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
        $validate = Validator::make(
            $request->all(),
            [
                // 'path' => 'required|mimes:jpg, png, jpeg|max:2048',
                // 'path' => 'required|mimes:pdf|max:2048',
                'path'          => 'required|max:2048',
               // 'tipo'          => 'required',
                'nombre'        => 'required',
            ],
            [
                'path.required'      => 'El campo del enlace de direccion es requerido',
              //  'tipo.required'      => 'El campo tipo adjunto es requerido',
                'nombre.required'    => 'El campo tipo adjunto es requerido',

            ]
        );

        if ($validate->fails()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validate->errors()
                ],
                200
            );
        }

        $file_adjunto = $request->file('path');
        $path_adjunto = $file_adjunto->store('public');

        $adjunto = new RhTrnAdjunto();

        $adjunto->path  = $path_adjunto;
       // $adjunto->tipo  = $request->tipo;
        $adjunto->nombre  = $request->nombre;

        $adjunto->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de archivo creado exitosamente',
            'data'      => $adjunto
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

        $adjunto = RhTrnAdjunto::find($id);

        if (is_null($adjunto)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de archivo no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de archivo recuperado exitosamente',
            'data'      => $adjunto
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
        $validate = Validator::make(
            $request->all(),
            [
                // 'path' => 'required|mimes:jpg, png, jpeg|max:2048',
                // 'path' => 'required|mimes:pdf|max:2048',
                'path'          => 'required|max:2048',
              //  'tipo'          => 'required',
                'nombre'        => 'required',
            ],
            [
                'path.required'      => 'El campo del enlace de direccion es requerido',
              //  'tipo.required'      => 'El campo tipo adjunto es requerido',
                'nombre.required'    => 'El campo tipo adjunto es requerido',

            ]
        );

        if ($validate->fails()) {
            return response()->json(
                [
                    'status' => false,
                    'message' => 'validation error',
                    'errors' => $validate->errors()
                ],
                401
            );
        }
        
        $adjunto = RhTrnAdjunto::find($id);

        if (is_null($adjunto)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $file_adjunto      = $request->file('path');
        $path_adjunto      = $file_adjunto->store('public');

        $adjunto->path     = $path_adjunto;
        $adjunto->tipo     = $request->tipo;
        $adjunto->nombre   = $request->nombre;
        $adjunto->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de archivo creado exitosamente',
            'data'      => $adjunto
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
