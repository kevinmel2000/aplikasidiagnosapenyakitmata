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

Route::get('/', 'Webfront@index');


Route::group(['prefix' => 'api'], function () {
    Route::get('{id}','CrudsController@finding');
});

Route::group(['prefix' => 'backend'], function () {

    // Route::get('{id}/edit','CrudsController@find');
    // Route::get('{id}/hapus','CrudsController@destroy');
    // Route::post('{id}/update','CrudsController@update');
    // WELCOME
    Route::get('/', 'WelcomeController@login');
    // DASHBOARD
    Route::get('dashboard', 'DashboardController@index');
    // PENYAKIT
    Route::get('penyakit', 'PenyakitController@index');
    Route::get('penyakit/search', 'PenyakitController@search');
    Route::get('penyakit/searchproses', 'PenyakitController@searchproses');
    Route::get('penyakit/add', 'PenyakitController@add');
    Route::get('penyakit/{id}/update', 'PenyakitController@update');
    Route::get('penyakit/{id}/delete', 'PenyakitController@delete');
    Route::post('penyakit/addproses', 'PenyakitController@addproses');
    Route::post('penyakit/updateproses', 'PenyakitController@updateproses');
    // GEJALA
    Route::get('gejala', 'GejalaController@index');
    Route::get('gejala/add','GejalaController@add');
    Route::get('gejala/{id}/update', 'GejalaController@update');
    Route::get('gejala/{id}/deleted', 'GejalaController@deleted');
    Route::post('gejala/addproses','GejalaController@addproses');
    Route::post('gejala/updateproses','GejalaController@updateproses');
    // PENYEBAB
    Route::get('penyebab', 'PenyebabController@index');
      // SOLUSI
    Route::get('solusi', 'SolusiController@index');
    Route::get('solusi/add', 'SolusiController@add');
    Route::get('solusi/{id}/update', 'SolusiController@update');
    Route::get('solusi/{id}/deleted', 'SolusiController@deleted');
    Route::post('solusi/addproses', 'SolusiController@addproses');
    Route::post('solusi/updateproses', 'SolusiController@updateproses');
    
});





Route::group(['prefix' => 'admin'], function () {
    Route::get('/', 'admin@listdata');
    Route::get('add', 'admin@add');
    Route::post('add','admin@entri');
});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
