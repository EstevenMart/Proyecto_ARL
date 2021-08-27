<?php

use App\Http\Controllers\AccidenteController;
use App\Http\Controllers\AgentAcciController;
use App\Http\Controllers\MecanismoController;
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
/* Route::get('/agentAcci/delete/{id}', [AgentAcciController::class, 'delete'])->name('agentAcci.delete'); */
Route::get('/agentAcci/formAgentAcci/{id?}', [AgentAcciController::class, 'form'])->name('agentAcci.formAgentAcci');
Route::post('/agentAcci/saveAgentAcci', [AgentAcciController::class, 'save'])->name('agentAcci.saveAgentAcci');

Route::get('/mecanismos' , [MecanismoController::class , "show"]);
/* Route::get('/agentAcci/delete/{id}', [AgentAcciController::class, 'delete'])->name('agentAcci.delete'); */
Route::get('/mecanismo/formMecanismo/{id?}', [MecanismoController::class, 'form'])->name('mecanismo.formMecanismo');
Route::post('/mecanismo/saveMecanismo', [MecanismoController::class, 'save'])->name('mecanismo.saveMecanismo');
