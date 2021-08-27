<?php

use App\Http\Controllers\AccidenteController;
use App\Http\Controllers\AgentAcciController;
use App\Http\Controllers\SitioController;
use App\Http\Controllers\OtraPersonaController;



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
});

Route::get('/accidentes', [AccidenteController::class , "show"] );
/* Route::get('/accidente/delete/{id}',[ProductController::class, 'delete'])->name('accidente.delete'); */
Route::get('/accidente/formAccidente/{id?}', [AccidenteController::class, 'form'])->name('accidente.formAccidente');
Route::post('/accidente/saveAccidente', [AccidenteController::class, 'save'])->name('accidente.saveAccidente');


Route::get('/agentAccis' , [AgentAcciController::class , "show"]);
Route::get('/agentAcci/delete/{id}', [AgentAcciController::class, 'delete'])->name('agentAcci.delete');
Route::get('/agentAcci/formagentAcci/{id?}', [AgentAcciController::class, 'form'])->name('agentAcci.form');
Route::post('/agentAcci/save', [AgentAcciController::class, 'save'])->name('agentAcci.save');

Route::get('/sitios' , [SitioController::class , "show"]);
Route::get('/sitio/formSitio/{id?}', [SitioController::class, 'form'])->name('sitio.formSitio');
Route::post('/sitio/saveSitio', [SitioController::class, 'save'])->name('sitio.saveSitio');

Route::get('/otrasPersonas' , [OtraPersonaController::class , "show"]);
Route::get('/otrasPersona/formOtrasPersona/{id?}', [OtraPersonaController::class, 'form'])->name('otraPersona.formOtrasPersona');
Route::post('/otrasPersona/saveOtrasPersona', [OtraPersonaController::class, 'save'])->name('otraPersona.saveOtraPersona');
