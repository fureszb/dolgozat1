<?php

use App\Http\Controllers\FlightController;
use App\Http\Controllers\TravelController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth.basic')->group(function () {
    Route::patch("/travel/{id}", [TravelController::class, "modositas"]);
    Route::get("/flights/{airline}", [FlightController::class, "inditottUt"]);
   
  
});
Route::delete("/delete", [FlightController::class, "toroltJarat"]);
Route::get("/travels", [TravelController::class, "osszesAdat"]);
