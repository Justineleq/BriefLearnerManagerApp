<?php

use src\Controllers\HomeController;

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];

// require __DIR__ . '/controllers/homeController.php';
require_once __DIR__ . '/../config.php';

$homeController = new HomeController;

switch ($route) {
    case HOME_URL:
      $homeController->homepage();
      if ($method == 'GET') {
        $homeController->homepage();
      } else if ($method == 'POST') {
      $homeController->teacherDashboard();
      }
      break;
      case HOME_URL .'teacher':
        if ($method == 'GET') {
          $homeController->homepage();
        } else if ($method == 'POST') {
        // $homeController->teacherDashboard();
        }
        break;
  
  default:
    header('404');
    break;
}
