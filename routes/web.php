<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
/**
* API de controle financeiro com framework Lumen 8
* Autor: Antonio Halyson
* email: halisonsc5@gmail.com
* Data 30/12/2020
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello', 'HelloController@helloDefault');
$router->get('/hello/{nome}', 'HelloController@hello');

//$router->group(['prefix' => 'admin'], function () use ($router) {
//    $router->get('users', function ()    {
//
//    });
//});


$router->get('/contas', 'ContaController@listar');
$router->get('/contas/search/{id}', 'ContaController@findById');
$router->get('/contas/create', 'ContaController@create');
$router->post('/contas/store', 'ContaController@store');
$router->get('/contas/edit', 'ContaController@edit');
$router->put('/contas/editar/{id}', 'ContaController@update');
$router->delete('/contas/delete/{id}', 'ContaController@deleteConta');


$router->get('/clientes', 'ClienteController@listar');
$router->get('/clientes/search/{id}', 'ClienteController@findById');
$router->get('/clientes/create', 'ClienteController@create');
$router->post('/clientes/store', 'ClienteController@store');
$router->get('/clientes/edit', 'ClienteController@edit');
$router->put('/clientes/editar/{id}', 'ClienteController@update');
$router->delete('/clientes/delete/{id}', 'ClienteController@deleteConta');