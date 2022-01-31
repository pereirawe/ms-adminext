<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', function () use ($router) {
    return $router->app->version();
});

$router->group(['prefix' => 'api'], function () use ($router) {
    $router->get('categories',  ['uses' => 'CategoryController@showAllCategories']);
    $router->get('categories/{id}', ['uses' => 'CategoryController@showOneAuthor']);
    $router->post('categories', ['uses' => 'CategoryController@create']);
    $router->delete('categories/{id}', ['uses' => 'CategoryController@delete']);
    $router->put('categories/{id}', ['uses' => 'CategoryController@update']);
  });
