<?php

use App\Http\Controllers\AccidenteController;
use App\Http\Controllers\AfpController;
use App\Http\Controllers\ArpController;
use App\Http\Controllers\AgentAcciController;
use App\Http\Controllers\CargoController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\OtraPersonaController;
use App\Http\Controllers\EpsController;
use App\Http\Controllers\DepartamentoController;



use App\Http\Controllers\MecanismoController;
use App\Http\Controllers\TipoDocumentoController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\DashboardController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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


Route::get('/accidentes', [AccidenteController::class , "show"] );
/* Route::get('/accidente/delete/{id}',[ProductController::class, 'delete'])->name('accidente.delete'); */
Route::post('/accidente/store', [AccidenteController::class, "store"])->name('accidente.store');
Route::get('/accidente/createAccidente', [AccidenteController::class, 'create'])->name('accidente.createAccidente');
Route::get('/accidente/editAccidente/{id?}', [AccidenteController::class, 'edit'])->name('accidente.editAccidente');
Route::get('/accidente/infoAccidente/{id?}', [AccidenteController::class, 'find'])->name('accidente.findAccidente');
Route::put('/accidente/{id}',[AccidenteController::class, 'update'])->name('accidente.updateAccidente');


Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


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
//  Route::get('/usuarios',[UsuarioController::class, 'delete'])->name('usuario.delete'); 
Route::post('/usuario/store', [RegisterController::class, "__construct"])->name('usuario.store');
Route::get('/usuario/createUsuario', [UsuarioController::class, 'create'])->name('usuario.createUsuario');
Route::get('/usuario/editUsuario/{id?}', [UsuarioController::class, 'edit'])->name('usuario.editUsuario');
Route::get('/usuario/infoUsuario/{id?}', [UsuarioController::class, 'find'])->name('usuario.findUsuario');
Route::put('/usuario/{id}',[UsuarioController::class, 'update'])->name('usuario.updateUsuario');
Route::post('/usuario/saveUsuario', [UsuarioController::class, 'save'])->name('usuario.saveUsuario');

Route::get('/cargos' , [CargoController::class , "show"]);
Route::get('/cargo/formCargo/{id?}', [CargoController::class, 'form'])->name('cargo.formCargo');
Route::post('/cargo/saveCargo', [CargoController::class, 'save'])->name('cargo.saveCargo');

Route::get('/tipoDocumentos' , [TipoDocumentoController::class , "show"]);
Route::get('/tipoDocumento/formTipoDocumento/{id?}', [TipoDocumentoController::class, 'form'])->name('tipoDocumento.formTipoDocumento');
Route::post('/tipoDocumento/saveTipoDocumento', [TipoDocumentoController::class, 'save'])->name('tipoDocumento.saveTipoDocumento');

// afp
Route::get('/afps' , [AfpController::class , "show"]);
Route::get('/afp/formAfp/{id?}', [AfpController::class, 'form'])->name('afp.formAfp');
Route::post('/afp/saveAfp', [AfpController::class, 'save'])->name('afp.saveAfp');
// arp
Route::get('/arps' , [ArpController::class , "show"]);
Route::get('/arp/formArp/{id?}', [ArpController::class, 'form'])->name('arp.formArp');
Route::post('/arp/saveArp', [ArpController::class, 'save'])->name('arp.saveArp');
// eps
Route::get('/eps' , [EpsController::class , "show"]);
Route::get('/eps/formEps/{id?}', [EpsController::class, 'form'])->name('eps.formEps');
Route::post('/eps/saveEps', [EpsController::class, 'save'])->name('eps.saveEps');
// departamento
Route::get('/departamentos' , [DepartamentoController::class , "show"]);
Route::get('/departamento/formDepartamento/{id?}', [DepartamentoController::class, 'form'])->name('departamento.formDepartamento');
Route::post('/departamento/saveDepartamento', [DepartamentoController::class, 'save'])->name('departamento.saveDepartamento');
//dashboar
Route::post('/Dashboard', [DashboardController::class , "show"])->name('Dashboard');
// grafico
Route::get( '/accidente/graficoUsuario' , [AccidenteController::class , "index"]); 
