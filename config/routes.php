<?php

use App\Controller\MainController;
use App\Controller\StudentsController;
use Symfony\Component\Routing\Loader\Configurator\RoutingConfigurator;

//https://www.adcisolutions.com/knowledge/getting-started-rest-api-symfony-4
return function(RoutingConfigurator $routes) {
    $routes->add('home','/')
        ->controller([MainController::class, 'index']);

    $routes->add('students', 'students')
        ->controller([StudentsController::class, 'all']);
};