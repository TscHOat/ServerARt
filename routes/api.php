<?php

use App\Http\Controllers\API\RegisterController;
use App\Http\Controllers\ControllerTest;
use App\Http\Controllers\PaintingController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [RegisterController::class, 'register']);
Route::post('login', [RegisterController::class, 'login']);

Route::get('/', [ControllerTest::class,'test'])->middleware('auth:api');

Route::get('/getHotItem',[PaintingController::class,'getHotItem']);
Route::get('/getPaintings',[PaintingController::class,'getPaintings']);
Route::get('/getDetailPainting/{id}',[PaintingController::class,'getDetailPainting']);
