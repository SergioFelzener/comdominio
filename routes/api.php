<?php

use App\Http\Controllers\APINews;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::post('/news', [APINews::class, 'store']);
Route::get('/news', [APINews::class, 'index']);





