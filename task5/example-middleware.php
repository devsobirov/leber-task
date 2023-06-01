<?php
// /routes/api.php

use Illuminate\Http\Request;

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('/any', SomeController::class);
    //...
});
// или
Route::resource('/any', SomeController::class)->middleware('auth:sanctum');