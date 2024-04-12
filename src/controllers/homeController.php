<?php

require_once __DIR__ . '/../services/Render.php';


class HomeController
{

  use Render;

  public function homepage()
  {
    $this->render('homepage');
  }

 
  public function teacherDashboard() {
   
   if(!empty(file_get_contents('php://input'))) {
      $data = json_decode(file_get_contents('php://input'));
      
   // var_dump($data->password);

      if($data) {
        $password = htmlspecialchars($data->password);
        $email = htmlspecialchars($data->email);
        $userRepo = new UserRepo;
        $users = $userRepo->checkEmailExists($email);
        var_dump($users);

      // if()

    
        



      }
    }
    } 
  }

  // public function auth(string $password): void
  // {
  //   if ($password === 'sally') {
  //     $_SESSION['connected'] = TRUE;
  //     header('location: '.HOME_URL.'teacher');
  //     die();
  //   } else {
  //     header('location: '.HOME_URL.'?error=connected');
  //   }
  // }

//   public function quit()
//   {
//     session_destroy();
//     header('location: '.HOME_URL);
//     die();
//   }

//   public function page404(): void
//   {    
//     header("HTTP/1.1 404 Not Found");
//     $this->render('404');
//   }
// }

