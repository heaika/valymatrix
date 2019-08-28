<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Monolog\Monolog;
use DI\Container;
use \Controllers;

require __DIR__ . '/../vendor/autoload.php';

$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();


require __DIR__.'/../app/settings.php'; // General settings

$app->addErrorMiddleware($settings['displayErrorDetails'], $settings['logErrors'], $settings['logErrorDetails']);

$app->get('/', function (Request $request, Response $response, $args) {
    $response->getBody()->write("Hello world!");
    return $response;
});

$app->get('/login', function (Request $request, Response $response, $args) {
   $loginController = new \Controllers\LoginController();
   return $loginController->getLogin($request,$response,$args);
});

$app->run();
