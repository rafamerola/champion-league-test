<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PlayersController;
use App\Http\Controllers\TeamsController;
use App\Http\Controllers\MatchesController;
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
/* Route::get('/', function () {
    return view('welcome');
}); */
Route::get('/jogadores/', [PlayersController::class, 'showPlayers']);
/* Route::post('', [PlayersController::class, 'add']); */
Route::post('/jogadores/add', [PlayersController::class, 'add']);
Route::put('/jogadores/{id}', [PlayersController::class, 'update']);
Route::delete('/jogadores/{id}', [PlayersController::class, 'delete']);

Route::get('/times/', [TeamsController::class, 'showTeams']);
Route::post('/times/add', [TeamsController::class, 'add']);
Route::put('/times/{id}', [TeamsController::class, 'update']);
Route::delete('/times/{id}', [TeamsController::class, 'delete']);

Route::get('/jogos/', [MatchesController::class, 'showMatches']);
Route::post('/jogos/add', [MatchesController::class, 'add']);
Route::put('/jogos/{id}', [MatchesController::class, 'update']);
Route::delete('/jogos/{id}', [MatchesController::class, 'delete']);


