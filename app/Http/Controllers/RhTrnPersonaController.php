<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RhTrnPersona;

class RhTrnPersonaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personas = RhTrnPersona::all()->load('estadoCivil', 'genero', 'pais', 'ciudad');

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de generos recuperadas exitosamente',
            'data'      => $personas
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
        $persona = new RhTrnPersona();
        $persona->paterno             = $request->paterno;
        $persona->materno             = $request->materno;
        $persona->nombres             = $request->nombres;
        $persona->cedula_identidad    = $request->cedula_identidad;
        $persona->expedido_ci         = $request->expedido_ci;
        $persona->complemento_ci      = $request->complemento_ci;
        $persona->fecha_nacimiento    = $request->fecha_nacimiento;
        $persona->telefono_fijo       = $request->telefono_fijo;
        $persona->telefono_movil      = $request->telefono_movil;
        $persona->correo_electronico  = $request->correo_electronico;
        $persona->nro_nua_afp         = $request->nro_nua_afp;
        $persona->nombre_afp          = $request->nombre_afp;
        $persona->libreta_militar     = $request->libreta_militar;
        $persona->grupo_sanguineo     = $request->grupo_sanguineo;
        $persona->nombre_banco        = $request->nombre_banco;
        $persona->nro_cuenta_bancaria = $request->nro_cuenta_bancaria;
        $persona->nro_nit             = $request->nro_nit;
        $persona->nombre_seguro       = $request->nombre_seguro;
        $persona->nro_seguro_medico   = $request->nro_seguro_medico;
        $persona->licencia_conducir   = $request->licencia_conducir;
        $persona->licencia_categoria  = $request->licencia_categoria;
        $persona->adjunto_id          = $request->adjunto_id;
        $persona->domicilio           = $request->domicilio;
        $persona->estado_civil_id     = $request->estado_civil_id;
        $persona->genero_id           = $request->genero_id;
        $persona->pais_id             = $request->pais_id;
        $persona->ciudad_id           = $request->ciudad_id;
        $persona->cas                 = $request->cas;
        $persona->nro_cas             = $request->nro_cas;
        $persona->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro de persona creado exitosamente',
            'data'      => $persona
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
            'data'      => $persona = RhTrnPersona::all()->load('estadoCivil', 'genero', 'pais', 'ciudad')
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
        $persona = RhTrnPersona::find($id);

        if (is_null($persona)) {
            return response()->json([
                'status'    => false,
                'message'   => 'Registro no encontrado'
            ], 404);
        }

        $persona->paterno             = $request->paterno;
        $persona->materno             = $request->materno;
        $persona->nombres             = $request->nombres;
        $persona->cedula_identidad    = $request->cedula_identidad;
        $persona->expedido_ci         = $request->expedido_ci;
        $persona->complemento_ci      = $request->complemento_ci;
        $persona->fecha_nacimiento    = $request->fecha_nacimiento;
        $persona->telefono_fijo       = $request->telefono_fijo;
        $persona->telefono_movil      = $request->telefono_movil;
        $persona->correo_electronico  = $request->correo_electronico;
        $persona->nro_nua_afp         = $request->nro_nua_afp;
        $persona->nombre_afp          = $request->nombre_afp;
        $persona->libreta_militar     = $request->libreta_militar;
        $persona->grupo_sanguineo     = $request->grupo_sanguineo;
        $persona->nombre_banco        = $request->nombre_banco;
        $persona->nro_cuenta_bancaria = $request->nro_cuenta_bancaria;
        $persona->nro_nit             = $request->nro_nit;
        $persona->nombre_seguro       = $request->nombre_seguro;
        $persona->nro_seguro_medico   = $request->nro_seguro_medico;
        $persona->licencia_conducir   = $request->licencia_conducir;
        $persona->licencia_categoria  = $request->licencia_categoria;
        $persona->adjunto_id          = $request->adjunto_id;
        $persona->domicilio           = $request->domicilio;
        $persona->estado_civil_id     = $request->estado_civil_id;
        $persona->genero_id           = $request->genero_id;
        $persona->pais_id             = $request->pais_id;
        $persona->ciudad_id           = $request->ciudad_id;
        $persona->cas                 = $request->cas;
        $persona->nro_cas             = $request->nro_cas;

        $persona->save();

        return response()->json([
            'status'    => true,
            'message'   => 'Registro modificado exitosamente',
            'data'      => $persona
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
