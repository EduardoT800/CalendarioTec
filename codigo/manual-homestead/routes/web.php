<?php

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
    return view('welcome');
});

Route::get('ejercisio1', function () {
    return view('Ejercisio1');
});

Route::get('ejercisio2', function () {
    return view('Ejercisio2');
});

Route::get('ejercisio3_1', function () {
    return view('Ejercisio3_1');
});

Route::get('practica2', function () {
    return view('Practica2');
});

Route::get('practica2m', function () {
    return view('Practica2menus');
});

Route::get('ejercisio3_2', function () {
    return view('Ejercisio3_2');
});

Route::get('ejercisio4', function () {
    return view('Ejercisio4_1');
});

Route::get('practica3', function () {
    return view('Practica3');
});

Route::get('practica4', function () {
    return view('Practica4');
});

Route::get('practica4i', function () {
    return view('imagenesp4');
});

Route::get('practica4e', function () {
    return view('Encuesta');
});

Route::get('practica5', function () {
    return view('Practica5');
});

Route::get('practica5c', function () {
    return view('Practica5c');
});

Route::get('practica6', function () {
    return view('Practica6');
});

Route::get('practica7', function () {
    return view('Practica7');
});

Route::get('practica7_2', function () {
    return view('Practica7_2');
});

Route::get('practica7_3', function () {
    return view('Practica7_3');
});

Route::get('ejercisio4_2', function () {
    return view('Ejercisio4_2');
});

Route::resource('/clientes','ClienteController');

Route::get('practica8_1', function () {
    return view('Practica8_1');
});

Route::get('practica8_2', function () {
    return view('Practica8_2');
});

Route::get('practica8_3', function () {
    return view('Practica8_3');
});

Route::get('practica8_4', function () {
    return view('Practica8_4');
});

Route::get('Ejercicio1P2', function () {
    return view('Ejercicio1P2');
});

Route::get('Ejercicio2P2', function () {
    return view('Ejercicio2P2');
});

Route::get('Ejercicio5P2', function () {
    return view('Ejercicio5P2');
});

Route::get('Ejercicio7P2', function () {
    return view('Ejercicio7P2');
});


/*
Rutas del proyecto
*/

Route::get('master', function () {
    return view('Calendario/layout/master');
});

Route::get('calendario1', function () {
    return view('Calendario/calendario_v1');
});

Route::get('admin', function () {
    return view('Calendario/AdminCalendario_1');
});

Route::resource('periods', 'PeriodController');

