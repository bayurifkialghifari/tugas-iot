<?php

use Illuminate\Support\Facades\Route;

// Auth
Route::post('log', App\Http\Controllers\Api\LogController::class);

// not found route
Route::fallback(function () {
    return response()->json(['message' => '404 Not Found.'], 404);
});
