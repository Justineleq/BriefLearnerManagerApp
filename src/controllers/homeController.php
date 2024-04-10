<?php

namespace src\controllers;

use src\services\Reponse;

class HomeController
{

  use Reponse;

  public function index(): void
  {
    if (isset($_GET['error'])) {
      $error = htmlspecialchars($_GET['error']);
    } else {
      $error = '';
    }

    $this->render("connection", ["error"=> $error]);
  }

  public function auth(string $password): void
  {
    if ($password === 'admin') {
      $_SESSION['connected'] = TRUE;
      header('location: '.HOME_URL.'connected');
      die();
    } else {
      header('location: '.HOME_URL.'?error=connected');
    }
  }

  public function quit()
  {
    session_destroy();
    header('location: '.HOME_URL);
    die();
  }

  public function page404(): void
  {    
    header("HTTP/1.1 404 Not Found");
    $this->render('404');
  }
}
