<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\Api\ApiAllController;
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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {

    Route::post('login', [AuthController::class, 'login']);
    Route::post('logout', [AuthController::class, 'logout']);
    Route::post('refresh', [AuthController::class, 'refresh']);
    Route::post('me', [AuthController::class, 'me']);
});

Route::prefix('glasses')->middleware('jwt.auth')->name('api.')->group( function (){
    Route::get('/api/get', [ApiAllController::class, 'api_test']);

    Route::get('/api', \App\Http\Controllers\Glasses\GetAllController::class)->name('get_all');
    Route::get('/api/my', \App\Http\Controllers\Glasses\GetAllPaginatorMyController::class)->name('get_all_my');
    Route::get('/api/template', \App\Http\Controllers\Glasses\GetAllPaginatorTemplateController::class)->name('get_all_template');
    Route::get('/scroll', \App\Http\Controllers\Glasses\GetAllScrollController::class)->name('get_all_scroll');

    Route::get('/api/read/{item}/{page}', \App\Http\Controllers\Glasses\ReadController::class)->name('glasses_read');

    Route::get('/api/create', \App\Http\Controllers\Glasses\CreateController::class)->name('glasses_create_get');
    Route::post('/api/create', \App\Http\Controllers\Glasses\CreatePostController::class)->name('glasses_create_post');

    Route::get('/api/{item}/{page}/update', \App\Http\Controllers\Glasses\UpdateController::class)->name('glasses_update_get');
    Route::patch('/api/update/{patch}/', \App\Http\Controllers\Glasses\UpdatePostController::class)->name('glasses_update_patch'); // put/patch

    Route::delete('/api/delete/{patch}', \App\Http\Controllers\Glasses\DeleteController::class)->name('glasses_delete');
});
//
