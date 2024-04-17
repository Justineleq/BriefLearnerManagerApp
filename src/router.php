<?php

use src\controllers\HomeController;

$route = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];


require_once __DIR__ . '/../config.php';

$homeController = new HomeController;

switch ($route) {
    case HOME_URL:
      if ($method == 'GET') {
        $homeController->homepage();
      } else if ($method == 'POST') {
      $homeController->teacherDashboard();
      }
      break;
  // case HOME_URL . '/teacher':
  //   $hom
  //   break;
  
  default:
    header('404');
    break;
}
