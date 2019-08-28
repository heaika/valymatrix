<?php
namespace Controllers;

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

class LoginController {
   function __construct() {
   }
   
   function getLogin($request, $response, $args) {
      $response->getBody()->write('Login page');
      return $response;
   }

   function postLogin() {
   
   }
}
