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

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/hello', 'HelloController@helloDefault');
$router->get('/hello/{nome}', 'HelloController@hello');

$router->get('/contas', 'ContaApiController@listar');
$router->get('/contas/search/{id}', 'ContaApiController@findById');
$router->get('/contas/create', 'ContaApiController@create');
$router->post('/contas/store', 'ContaApiController@store');
$router->get('/contas/edit', 'ContaApiController@edit');
$router->put('/contas/editar/{id}', 'ContaApiController@update');
$router->delete('/contas/delete/{id}', 'ContaApiController@deleteConta');