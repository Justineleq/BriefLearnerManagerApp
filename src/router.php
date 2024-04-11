<?php


$route = $_SERVER['REDIRECT_URL'];
$method = $_SERVER['REQUEST_METHOD'];

$homeController = new HomeController();

switch ($route) {
    case HOME_URL . '/homepage':
      if ($method == 'GET') {
        $homeController->homepage();
      } else if ($method == 'POST') {
        
        
      }
      break;
  
  default:
    $homeController->quit();
    break;
}
