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
$router->get('/', function (){
    return view('app');
});

$router->post('/login', 'AuthController@login');
$router->get('/logout', 'AuthController@logout');

$router->get('/create', 'OrderController@create');
$router->get('/orders', 'OrderController@orders');
$router->post('/add', 'OrderController@addOrder');

$router->get('/genetic', 'GeneticController@genetic');

$router->get('/types', 'TypesJobsController@showTypes');
$router->post('/addType', 'TypesJobsController@addType');
$router->get('/delType', 'TypesJobsController@delType');
