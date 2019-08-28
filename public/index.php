<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Monolog\Monolog;

require __DIR__ . '/../vendor/autoload.php';

$app = AppFactory::create();

$displayErrorDetails = true;
$logErrors = true;
$logErrorDetails = false;
$app->addErrorMiddleware($displayErrorDetails, $logErrors, $logErrorDetails);

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/login', function (Request $request, Response $response, $args) {
   $c = new \Controllers\LoginController();
   return $c->getLogin($request,$response,$args);
});

$app->run();
