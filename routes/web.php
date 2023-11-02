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

use App\Http\Controllers\LaptopController;

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->get('/laptop', 'LaptopController@index');
$router->get('/laptop/{id}', 'LaptopController@show');
$router->post('/laptop', 'LaptopController@create');
$router->put('/laptop/{id}', 'LaptopController@update');
$router->delete('/laptop/{id}', 'LaptopController@delete');
