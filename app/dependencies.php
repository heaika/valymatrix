<?php
use Slim\Factory\AppFactory;
use Slim\Views\PhpRenderer;
use Monolog\Monolog;
use DI\Container;


$container = new Container();
AppFactory::setContainer($container);
$app = AppFactory::create();

