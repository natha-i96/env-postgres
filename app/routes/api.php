<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');



// public function downloadForm()
// {
//     return Pdf::loadView('license_form')->stream('ใบอนุญาต.pdf');
// }

Route::get('/pdf-demo', function () {
    $pdf = Pdf::loadView('pdf.license_form');
    // return $pdf->download('thai-report.pdf');
    return $pdf->stream('thai-license_form.pdf');
});



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
