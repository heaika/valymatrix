<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Monolog\Monolog;
use DI\Container;
use \Controllers;

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/login', function (Request $request, Response $response, $args) {
   $loginController = new \Controllers\LoginController();
   return $loginController->getLogin($request,$response,$args);
})->setName('login');