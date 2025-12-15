<?php

use App\Http\Controllers\NewkoolContactsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Storage;

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

Route::post('/atencion-al-cliente/send', [NewkoolContactsController::class, 'submit']);
Route::post('/servicio-tecnico/send', [NewkoolContactsController::class, 'service_submit']);


Route::get('download-catalogue', function () {
    $filePath = 'catalogo-newkool-2025.pdf'; 

    if (Storage::exists($filePath)) {
        return Storage::download('catalogo-newkool-2025.pdf');
    } else {
        return response()->json(['message' => 'File not found.'], 404);
    }
});