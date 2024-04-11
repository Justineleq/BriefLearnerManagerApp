<?php


$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

require_once __DIR__ . '/../config.php';

$homeController = new HomeController();

switch ($route) {
    case HOME_URL . 'homepage':
      if ($method == 'GET') {
        echo ('HOMEPAGE');
        $homeController->homepage();
      } else if ($method == 'POST') {
        
        
      }
      break;
  
  default:
    // $homeController->quit();
    break;
}
