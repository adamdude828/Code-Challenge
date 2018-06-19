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
$router->get('/', function () use ($router) {
    return $router->app->version();
});


$router->get('/nodes', 'NodeController@index');
$router->post("/nodes", 'NodeController@create');
$router->delete("/nodes/{node_id}", 'NodeController@delete');
$router->put('/nodes/{node_id}', 'NodeController@edit');
