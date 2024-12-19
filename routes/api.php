<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiTestControllerReact;

/* Route::get('test', function () {
    return response()->json(['message' => 'API working']);
}); */
Route::get('/test', [ApiTestControllerReact::class, 'test']);
