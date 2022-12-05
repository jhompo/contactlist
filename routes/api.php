<?php

use App\Http\Controllers\Api\ComentarioController;
use App\Http\Controllers\Api\ContactController;
use App\Http\Controllers\Api\OrigenController;
use App\Http\Controllers\Api\TaskController;
use App\Http\Controllers\Api\TipoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('jlogin1', [ UserController::class, 'authenticate']);


Route::apiResource('contact', ContactController::class); //->middleware('api');
Route::apiResource('comentario', ComentarioController::class); //->middleware('api');
Route::get('mycomments/{idcontact}', [ComentarioController::class,"comentarios"]); //->middleware('api');
Route::apiResource('task', TaskController::class); //->middleware('api');
Route::get('mytasks/{idcontact}', [TaskController::class,"task"]); //->middleware('api');
Route::apiResource('tipo', TipoController::class); //->middleware('api');
Route::apiResource('origen', OrigenController::class); //->middleware('api');

