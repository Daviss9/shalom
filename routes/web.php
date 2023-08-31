<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Clientes;
use App\Http\Livewire\Contratos;
use App\Http\Livewire\Tallajes;

// Route::Resource('/apishalom/personas','PersonaController');
// Route::Resource('/apishalom/tallajes','TallajeController');
// Route::Resource('/apishalom/areas','AreaController');
// Route::Resource('/apishalom/cargos','CargoController');
// Route::Resource('/apishalom/contratos','ContratoController');
// Route::get('/apishalom/tallas',[App\Http\Controllers\ServiciosController::class,'listarTallas']);
// Route::get('/apishalom/areas/{id}',[App\Http\Controllers\ServiciosController::class,'listarAreas']);
Route::get('clientes',Clientes::class);
Route::get('contratos',Contratos::class);
Route::get('tallajes',Tallajes::class);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



