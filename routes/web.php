<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PersonaController;
use App\Http\Controllers\CajeroController;
use App\Http\Controllers\GeneroController;
use App\Http\Controllers\DisqueriaController;
use App\Http\Controllers\AlbumController;
use App\Http\Controllers\IdiomaController;
use App\Http\Controllers\ArtistaController;
use App\Http\Controllers\FacturaController;
use App\Http\Controllers\DetalleController;
use App\Http\Controllers\TemaController;

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


Route::get('/', HomeController::class);

//Persona
Route::get('Persona', [PersonaController::class, 'index'])->name('personas.index');
Route::get('Persona/create', [PersonaController::class, 'create'])->name('personas.create');
Route::get('Persona', [PersonaController::class, 'store'])->name('personas.store');
Route::post('Persona/{id}', [PersonaController::class, 'create'])->name('personas.show');
//Cajero
Route::get('Cajero', [CajeroController::class, 'index']);
Route::get('Cajero/create', [CajeroController::class, 'create']);
Route::get('Cajero/{Cajero}', [CajeroController::class, 'show']);

//Genero
Route::get('Genero', [GeneroController::class, 'index']);
Route::get('Genero/create', [GeneroController::class, 'create']);
Route::get('Genero/{Genero}', [GeneroController::class, 'show']);

//Disqueria
Route::get('Disqueria', [DisqueriaController::class, 'index']);
Route::get('Disqueria/create', [DisqueriaController::class, 'create']);
Route::get('Disqueria/{Disqueria}', [DisqueriaController::class, 'show']);

//Album
Route::get('Album', [AlbumController::class, 'index']);
Route::get('Album/create', [AlbumController::class, 'create']);
Route::get('Album/{Album}', [AlbumController::class, 'show']);

//Idioma
Route::get('Idioma', [IdiomaController::class, 'index']);
Route::get('Idioma/create', [IdiomaController::class, 'create']);
Route::get('Idioma/{Idioma}', [IdiomaController::class, 'show']);

//Tema
Route::get('Tema', [TemaController::class, 'index']);
Route::get('Tema/create', [TemaController::class, 'create']);
Route::get('Tema/{Tema}', [TemaController::class, 'show']);

//Artista
Route::get('Artista', [ArtistaController::class, 'index']);
Route::get('Artista/create', [ArtistaController::class, 'create']);
Route::get('Artista/{Artista}', [ArtistaController::class, 'show']);

//Factura
Route::get('Factura', [FacturaController::class, 'index']);
Route::get('Factura/create', [FacturaController::class, 'create']);
Route::get('Factura/{Factura}', [FacturaController::class, 'show']);

//Detalle
Route::get('Detalle', [DetalleController::class, 'index']);
Route::get('Detalle/create', [DetalleController::class, 'create']);
Route::get('Detalle/{Detalle}', [DetalleController::class, 'show']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
