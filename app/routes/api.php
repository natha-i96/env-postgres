<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// use Illuminate\Support\Facades\Route;

Route::get('/db-check', function () {
    try {
        $result = DB::select('SELECT version()');
        return response()->json([
            'status' => 'success',
            'database_version' => $result[0]->version,
        ]);
    } catch (\Exception $e) {
        return response()->json([
            'status' => 'error',
            'message' => $e->getMessage(),
        ], 500);
    }
});
