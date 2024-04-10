<?php

use src\controllers\HomeController;

$route = $_SERVER['REDIRECT_URL'];
$method = $_SERVER['REQUEST_METHOD'];

$HomeController = new HomeController;

switch ($route) {
    case HOME_URL:
      if (isset($_SESSION['connected'])) {
        header('location: '.HOME_URL.'connection');
        die;
      } else {
        $HomeController->index();
      }
      break;
}