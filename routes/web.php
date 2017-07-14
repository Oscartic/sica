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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'auth'], function (){
    Route::get('/inicio', 'HomeController@index')->name('inicio');

    Route::get('/horario', 'admin\ProfessorController@horario')->name('horario');
});

Route::group(['middleware' => 'director','admin'], function (){
    //Professor Routes
    Route::resource('docente', 'admin\ProfessorController');
    Route::patch('docente/{id}/restore', 'admin\ProfessorController@restore')->name('docente.restore');
    //Subject Routes
    Route::resource('asignatura', 'admin\SubjectController');
    Route::patch('asignatura/{id}/restore', 'admin\SubjectController@restore')->name('asignatura.restore');
});

Route::group(['middleware' => 'admin', 'prefix' => 'administracion'], function (){
    Route::get('/', 'admin\AdminController@index')->name('admin.panel');
    Route::get('/roles', 'admin\AdminController@listRole')->name('role.index');
});