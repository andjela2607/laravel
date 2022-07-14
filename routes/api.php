<?php

use App\Http\Controllers\API\CompanyController;
use App\Http\Controllers\API\ContactConroller;
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

// API Resource
// Route::apiResource('/contacts', ContactConroller::class);

Route::apiResources([
    '/contacts' => ContactConroller::class,
    '/companies' => CompanyController::class
]);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
