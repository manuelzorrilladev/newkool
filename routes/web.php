<?php

use Inertia\Inertia;
use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Application;
use App\Http\Controllers\NewkoolContactsController;
use App\Http\Controllers\NewkoolProductsController;
use App\Http\Controllers\NewkoolUbicationsController;
use Illuminate\Support\Facades\File;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION
    ]);
});

Route::get('/somos-newkool',function(){
    return Inertia::render('About') ;
});

Route::get('/catalogo', function () {
    $directoryPath = public_path('/assets/catalogue-assets');
    if (File::isDirectory($directoryPath)) {
        $files = File::files($directoryPath);
        $fileCount = count($files);
    } else {
        $fileCount = 0;
    }
    return Inertia::render('Catalog', [
        'pages' => $fileCount

    ]);
});





Route::get('/servicio-tecnico',function(){
    return Inertia::render('Service') ;
}); 
 
Route::get('/donde-encontrarnos', [NewkoolUbicationsController::class, 'index']);


Route::get('/donde-encontrarnos/{id}', [NewkoolUbicationsController::class, 'details']);


Route::get('/linea-blanca', [NewkoolProductsController::class, 'getAll']);

Route::get('/linea-blanca/{name}', [NewkoolProductsController::class, 'getByType']);
Route::get('/linea-blanca/{name}/{type}', [NewkoolProductsController::class, 'getByTypeTag']);

Route::get('/productos/{name}', [NewkoolProductsController::class, 'getDescription']);


Route::get('/atencion-al-cliente', function(){
   return Inertia::render('Contact'); 
});
// Route::post('/atencion-al-cliente/send', [NewkoolContactsController::class, 'submit']);


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return Inertia::render('Dashboard');
    })->name('dashboard');
});
