<?php

use App\Http\Controllers\AccidenteController;
use App\Http\Controllers\AgentAcciController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\OtraPersonaController;



use App\Http\Controllers\MecanismoController;
use App\Http\Controllers\UsuarioController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');

Route::get('/accidentes', [AccidenteController::class , "show"] );
/* Route::get('/accidente/delete/{id}',[ProductController::class, 'delete'])->name('accidente.delete'); */
Route::get('/accidente/formAccidente/{id?}', [AccidenteController::class, 'form'])->name('accidente.formAccidente');
Route::get('/accidente/infoAccidente/{id?}', [AccidenteController::class, 'find'])->name('accidente.findAccidente');
Route::post('/accidente/saveAccidente', [AccidenteController::class, 'save'])->name('accidente.saveAccidente');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/sitios' , [SitioController::class , "show"]);
Route::get('/sitio/formSitio/{id?}', [SitioController::class, 'form'])->name('sitio.formSitio');
Route::post('/sitio/saveSitio', [SitioController::class, 'save'])->name('sitio.saveSitio');

Route::get('/otrasPersonas' , [OtraPersonaController::class , "show"]);
Route::get('/otrasPersona/formOtrasPersona/{id?}', [OtraPersonaController::class, 'form'])->name('otraPersona.formOtrasPersona');
Route::post('/otrasPersona/saveOtrasPersona', [OtraPersonaController::class, 'save'])->name('otraPersona.saveOtraPersona');

Route::get('/agentAccis' , [AgentAcciController::class , "show"]);
/* Route::get('/agentAcci/delete/{id}', [AgentAcciController::class, 'delete'])->name('agentAcci.delete'); */
Route::get('/agentAcci/formAgentAcci/{id?}', [AgentAcciController::class, 'form'])->name('agentAcci.formAgentAcci');
Route::post('/agentAcci/saveAgentAcci', [AgentAcciController::class, 'save'])->name('agentAcci.saveAgentAcci');

Route::get('/mecanismos' , [MecanismoController::class , "show"]);
/* Route::get('/agentAcci/delete/{id}', [AgentAcciController::class, 'delete'])->name('agentAcci.delete'); */
Route::get('/mecanismo/formMecanismo/{id?}', [MecanismoController::class, 'form'])->name('mecanismo.formMecanismo');
Route::post('/mecanismo/saveMecanismo', [MecanismoController::class, 'save'])->name('mecanismo.saveMecanismo');


Route::get('/usuarios', [UsuarioController::class , "show"] );
/* Route::get('/accidente/delete/{id}',[ProductController::class, 'delete'])->name('accidente.delete'); */
Route::get('/usuario/formUsuario/{id?}', [UsuarioController::class, 'form'])->name('usuario.formUsuario');
/* Route::get('/usuario/infoUsuario/{id?}', [UsuarioController::class, 'find'])->name('usuario.findUsuario'); */
Route::post('/usuario/saveUsuario', [UsuarioController::class, 'save'])->name('usuario.saveUsuario');
