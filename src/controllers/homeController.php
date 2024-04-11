<?php

require_once __DIR__ . '/../services/Render.php';

class HomeController
{

  use Render;

  public function homepage()
  {
    $this->render('homepage');
  }

  public function auth(string $password): void
  {
    if ($password === 'admin') {
      $_SESSION['connected'] = TRUE;
      header('location: '.HOME_URL.'homepage');
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
