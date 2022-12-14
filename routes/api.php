<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RhClGeneroController;
use App\Http\Controllers\RhClEstadoCivilController;
use App\Http\Controllers\RhClPaisController;
use App\Http\Controllers\RhClCiudadController;
use App\Http\Controllers\RhClParentescoController;
use App\Http\Controllers\RhClIdiomaController;
use App\Http\Controllers\RhClGradoController;
use App\Http\Controllers\RhClInstitucionController;
use App\Http\Controllers\RhClEstadoController;

use App\Http\Controllers\RhTrnAdjuntoController;
use App\Http\Controllers\RhTrnPersonaController;
use App\Http\Controllers\RhTrnParentescoController;
use App\Http\Controllers\RhTrnFormacionController;
use App\Http\Controllers\RhTrnIdiomaController;
use App\Http\Controllers\RhTrnExperienciaLaboralController;
use App\Http\Controllers\RhTrnCursosController;
use App\Http\Controllers\RhTrnDeclaracionJuradaController;
use App\Http\Controllers\RhTrnDatoLaboralController;


/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/generos', [RhClGeneroController::class, 'index']);
Route::post('/generos', [RhClGeneroController::class, 'store']);
Route::get('/generos/{id}', [RhClGeneroController::class, 'show']);
Route::put('/generos/{id}', [RhClGeneroController::class, 'update']);
Route::delete('/generos/{id}', [RhClGeneroController::class, 'destroy']);

Route::get('/estados-civiles', [RhClEstadoCivilController::class, 'index']);
Route::post('/estados-civiles', [RhClEstadoCivilController::class, 'store']);
Route::get('/estados-civiles/{id}', [RhClEstadoCivilController::class, 'show']);
Route::put('/estados-civiles/{id}', [RhClEstadoCivilController::class, 'update']);
Route::delete('/estados-civiles/{id}', [RhClEstadoCivilController::class, 'destroy']);

Route::get('/paises', [RhClPaisController::class, 'index']);
Route::post('/paises', [RhClPaisController::class, 'store']);
Route::get('/paises/{id}', [RhClPaisController::class, 'show']);
Route::put('/paises/{id}', [RhClPaisController::class, 'update']);

Route::get('/ciudades', [RhClCiudadController::class, 'index']);
Route::post('/ciudades', [RhClCiudadController::class, 'store']);
Route::get('/ciudades/{id}', [RhClCiudadController::class, 'show']);
Route::put('/ciudades/{id}', [RhClCiudadController::class, 'update']);
Route::delete('/ciudades/{id}', [RhClCiudadController::class, 'destroy']);

Route::get('/adjuntos', [RhTrnAdjuntoController::class, 'index']);
Route::post('/adjuntos', [RhTrnAdjuntoController::class, 'store']);
Route::get('/adjuntos/{id}', [RhTrnAdjuntoController::class, 'show']);
Route::put('/adjuntos/{id}', [RhTrnAdjuntoController::class, 'update']);

Route::get('/personas', [RhTrnPersonaController::class, 'index']);
Route::post('/personas', [RhTrnPersonaController::class, 'store']);
Route::get('/personas/{id}', [RhTrnPersonaController::class, 'show']);
Route::put('/personas/{id}', [RhTrnPersonaController::class, 'update']);
Route::delete('/personas/{id}', [RhTrnPersonaController::class, 'destroy']);

Route::get('/parentescos', [RhClParentescoController::class, 'index']);
Route::post('/parentescos', [RhClParentescoController::class, 'store']);
Route::get('/parentescos/{id}', [RhClParentescoController::class, 'show']);
Route::put('/parentescos/{id}', [RhClParentescoController::class, 'update']);
Route::delete('/parentescos/{id}', [RhClParentescoController::class, 'destroy']);

Route::get('/parentescos-personas', [RhTrnParentescoController::class, 'index']);
Route::post('/parentescos-personas', [RhTrnParentescoController::class, 'store']);
Route::get('/parentescos-personas/{id}', [RhTrnParentescoController::class, 'show']);
Route::put('/parentescos-personas/{id}', [RhTrnParentescoController::class, 'update']);
Route::get('/parentescos-personas/persona/{id}', [RhTrnParentescoController::class, 'parentescoPersonaId']);
Route::delete('/parentescos-personas/{id}', [RhTrnParentescoController::class, 'destroy']);

Route::get('/formacion-academica', [RhTrnFormacionController::class, 'index']);
Route::post('/formacion-academica', [RhTrnFormacionController::class, 'store']);
Route::get('/formacion-academica/{id}', [RhTrnFormacionController::class, 'show']);
Route::put('/formacion-academica/{id}', [RhTrnFormacionController::class, 'update']);
Route::get('/formacion-academica/persona/{id}', [RhTrnFormacionController::class, 'formacionesPersonaId']);
Route::delete('/formacion-academica/{id}', [RhTrnFormacionController::class, 'destroy']);

Route::get('/idiomas', [RhClIdiomaController::class, 'index']);
Route::post('/idiomas', [RhClIdiomaController::class, 'store']);
Route::get('/idiomas/{id}', [RhClIdiomaController::class, 'show']);
Route::put('/idiomas/{id}', [RhClIdiomaController::class, 'update']);

Route::get('/idiomas-personas', [RhTrnIdiomaController::class, 'index']);
Route::get('/idiomas-personas/persona/{id}', [RhTrnIdiomaController::class, 'idiomaPersonaId']);
Route::post('/idiomas-personas', [RhTrnIdiomaController::class, 'store']);
Route::get('/idiomas-personas/{id}', [RhTrnIdiomaController::class, 'show']);
Route::put('/idiomas-personas/{id}', [RhTrnIdiomaController::class, 'update']);
Route::delete('/idiomas-personas/{id}', [RhTrnIdiomaController::class, 'destroy']);

Route::get('/instituciones', [RhClInstitucionController::class, 'index']);
Route::post('/instituciones', [RhClInstitucionController::class, 'store']);
Route::get('/instituciones/{id}', [RhClInstitucionController::class, 'show']);
Route::put('/instituciones/{id}', [RhClInstitucionController::class, 'update']);

Route::get('/grados', [RhClGradoController::class, 'index']);
Route::post('/grados', [RhClGradoController::class, 'store']);
Route::get('/grados/{id}', [RhClGradoController::class, 'show']);
Route::put('/grados/{id}', [RhClGradoController::class, 'update']);

Route::get('/estados', [RhClEstadoController::class, 'index']);
Route::post('/estados', [RhClEstadoController::class, 'store']);
Route::get('/estados/{id}', [RhClEstadoController::class, 'show']);
Route::put('/estados/{id}', [RhClEstadoController::class, 'update']);

Route::get('/experiencias-laborales', [RhTrnExperienciaLaboralController::class, 'index']);
Route::post('/experiencias-laborales', [RhTrnExperienciaLaboralController::class, 'store']);
Route::get('/experiencias-laborales/{id}', [RhTrnExperienciaLaboralController::class, 'show']);
Route::put('/experiencias-laborales/{id}', [RhTrnExperienciaLaboralController::class, 'update']);
Route::get('/experiencias-laborales/persona/{id}', [RhTrnExperienciaLaboralController::class, 'experienciasLaboralesPersonaId']);
Route::delete('/experiencias-laborales/{id}', [RhTrnExperienciaLaboralController::class, 'destroy']);

Route::get('/cursos', [RhTrnCursosController::class, 'index']);
Route::post('/cursos', [RhTrnCursosController::class, 'store']);
Route::get('/cursos/{id}', [RhTrnCursosController::class, 'show']);
Route::get('/cursos/persona/{id}/{tipo}', [RhTrnCursosController::class, 'cursosTipoPersonaId']);
Route::put('/cursos/{id}', [RhTrnCursosController::class, 'update']);
Route::delete('/cursos/{id}', [RhTrnCursosController::class, 'destroy']);

Route::get('/declaraciones-juradas', [RhTrnDeclaracionJuradaController::class, 'index']);
Route::post('/declaraciones-juradas', [RhTrnDeclaracionJuradaController::class, 'store']);
Route::get('/declaraciones-juradas/{id}', [RhTrnDeclaracionJuradaController::class, 'show']);
Route::get('/declaraciones-juradas/persona/{id}', [RhTrnDeclaracionJuradaController::class, 'declaracionJuradaPersonaId']);
Route::put('/declaraciones-juradas/{id}', [RhTrnDeclaracionJuradaController::class, 'update']);
Route::delete('/declaraciones-juradas/{id}', [RhTrnDeclaracionJuradaController::class, 'destroy']);

Route::get('/datos-laborales', [RhTrnDatoLaboralController::class, 'index']);
Route::post('/datos-laborales', [RhTrnDatoLaboralController::class, 'store']);
Route::get('/datos-laborales/{id}', [RhTrnDatoLaboralController::class, 'show']);
Route::put('/datos-laborales/{id}', [RhTrnDatoLaboralController::class, 'update']);
Route::delete('/datos-laborales/{id}', [RhTrnDatoLaboralController::class, 'destroy']);













