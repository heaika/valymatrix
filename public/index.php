<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Monolog\Monolog;
use DI\Container;
use \Controllers;

ini_set('display_errors','On');
error_reporting(E_ALL);

require __DIR__ . '/../vendor/autoload.php';
require __DIR__.'/../app/config.php'; // General settings
require __DIR__.'/../app/dependencies.php'; // DIC

$app->addErrorMiddleware($config['displayErrorDetails'], $config['logErrors'], $config['logErrorDetails']);

require __DIR__.'/../app/routes.php'; // Routes for app

$app->run();
