<?php

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
$ruta = '/authors/{author}';
$router->get('/authors','AuthorController@index');
$router->post('/authors','AuthorController@store');
$router->get($ruta,'AuthorController@show');
$router->put($ruta,'AuthorController@update');
$router->patch($ruta,'AuthorController@update');
$router->delete($ruta,'AuthorController@destroy');
