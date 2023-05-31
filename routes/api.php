<?php

use App\Http\Controllers\API\ApiAssetsController;
use App\Http\Controllers\API\ApiContactController;
use App\Http\Controllers\API\ApiSubscriberController;
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

Route::get('/list-contact', [ApiContactController::class, 'listContact']);
Route::get('/list-subscriber', [ApiSubscriberController::class, 'listSubscriber']);
Route::get('/list-assets', [ApiAssetsController::class, 'listAssets']);

Route::post('/post-contact', [ApiContactController::class, 'postContact']);
Route::post('/post-subscriber', [ApiSubscriberController::class, 'postSubscriber']);
// Route::post('/post-assets', [ApiAssetsController::class, 'postAssets']);