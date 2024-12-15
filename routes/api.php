<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Inventory\ItemCategoryController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {
    //start auth
    Route::post('/login', [AuthController::class, 'login']);
    Route::post('/register', [AuthController::class, 'register']);

       // ItemCategory routes with auth middleware
       Route::middleware('auth:api')->group(function () {
        // Route::post('/item-category-create', [ItemCategoryController::class, 'create']);
        // Route::put('/item-category/{id}', [ItemCategoryController::class, 'update']);
        // Route::delete('/item-category/{id}', [ItemCategoryController::class, 'delete']);
        // Route::get('/item-category', [ItemCategoryController::class, 'getAll']);
        // Route::get('/item-category/{id}', [ItemCategoryController::class, 'getById']);
    });

});
