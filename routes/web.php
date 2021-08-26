<?php

use App\Http\Controllers\AccidenteController;
use App\Http\Controllers\AgentAcciController;

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

Route::get('/agentAcci' , [AgentAcciController::class , "show"]);

Route::get('/agentAcci/delete/{id}', [AgentAcciController::class, 'delete'])->name('agentAcci.delete');

Route::get('/agentAcci/formagentAcci/{id?}', [AgentAcciController::class, 'form'])->name('agentAcci.form');

Route::post('/agentAcci/save', [AgentAcciController::class, 'save'])->name('agentAcci.save');

