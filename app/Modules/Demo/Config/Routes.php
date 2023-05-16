<?php

if(!isset($routes))
{ 
    $routes = \Config\Services::routes(true);
}

$routes->group('demo', ['namespace' => 'App\Modules\Demo\Controllers'], function($subroutes){

    /*** Route for Demo ***/
    $subroutes->add('', 'Demo::index');

});
