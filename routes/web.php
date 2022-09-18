<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HolaController;
use App\Http\Controllers\AlumnoController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/', [HolaController::class, 'index'] );


Route::get('/alumnos', [AlumnoController::class, 'index'])->name('alumnos.index');
Route::get('/alumnos/create', [AlumnoController::class, 'create'])->name('alumnos.create');
Route::post('/alumnos/store', [AlumnoController::class, 'store'])->name('alumnos.store');

/* si se pasa numero se muestra un texto con el numero en la pantalla,
  si pasa letras muestra el error  404 NOT FOUND*/
  /*
Route::get('post/{numero}',function ($numero){
    return "Blog Post $numero";
})->where(['numero'=>'[0-9]+']);*//* solo numeros */





