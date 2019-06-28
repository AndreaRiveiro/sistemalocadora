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

Route :: get("/cadastro", function(){
        return view("cadastro", ["usuarios"=>[
            ["nome"=>"Vinicius"],
            ["nome"=>"Rafael"]
        ]]);
});

Route :: get("/compras", "comprasController@index");

Route::get("ator", "atorController@index");->middleware("checkAdmin");

Route::get("ator/cadastro", "atorController@create");

Route::post("ator/cadastro", "atorController@create");

Route::get("ator/editar/{id}", "atorController@editar");

Route::post("ator/editar/{id}", "atorController@editar");

Route::get("filme", "filmeController@index");

Route::get("filme/editar/{id}", "filmeController@editar");

Route::post("filme/editar/{id}", "filmeController@editar");

Route::get("filme/excluir/{id}", "filmeController@excluir");

Route::post("filme/excluir/{id}", "filmeController@excluir");

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
