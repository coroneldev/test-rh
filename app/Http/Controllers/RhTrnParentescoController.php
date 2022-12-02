<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhTrnParentesco;

class RhTrnParentescoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $parentesco = RhTrnParentesco::where('activo', '=', 'true')->get();
        return response()->json([
            'status'    => true,
            'message'   => 'Registro de parentescos recuperado exitosamente',
            'data'      => $parentesco
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
        $parentesco = new RhTrnParentesco();

        $parentesco->persona_id              = $request->persona_id;
        $parentesco->parentesco_id           = $request->parentesco_id;
        $parentesco->nombres                 = $request->nombres;
        $parentesco->apellidos               = $request->apellidos;
        $parentesco->cedula_identidad        = $request->cedula_identidad;
        $parentesco->direccion_laboral       = $request->direccion_laboral;
        $parentesco->direccion_parentesco    = $request->direccion_parentesco;
        $parentesco->correo_electronico      = $request->correo_electronico;

        $parentesco->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro creado exitosamente',
            'data'      => $parentesco
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
        $parentesco = RhTrnParentesco::find($id);

        if (is_null($parentesco)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Solicitud de registro no encontrado'
            ], 404);
        }

        return response()->json([
            'status'    => true,
            'message'   => 'Solicitud de registro recuperado exitosamente',
            'data'      => $parentesco
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
        $parentesco = RhTrnParentesco::find($id);

        if (is_null($parentesco)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $parentesco->persona_id              = $request->persona_id;
        $parentesco->parentesco_id           = $request->parentesco_id;
        $parentesco->nombres                 = $request->nombres;
        $parentesco->apellidos               = $request->apellidos;
        $parentesco->cedula_identidad        = $request->cedula_identidad;
        $parentesco->direccion_laboral       = $request->direccion_laboral;
        $parentesco->direccion_parentesco    = $request->direccion_parentesco;

        $parentesco->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $parentesco
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
        $parentesco = RhTrnParentesco::find($id);

        if (is_null($parentesco)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro de persona no encontrado'
            ], 404);
        }
        $parentesco->activo                  = false;
        $parentesco->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de persona eliminado exitosamente',
            'data'      => $parentesco
        ], 200);
    }
}
