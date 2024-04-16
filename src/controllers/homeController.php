<?php
 namespace src\controllers;

use Database;
use src\repositories\UserRepo;
use src\services\Render;

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

      if($data) {
        $password = htmlspecialchars($data->password);
        $email = htmlspecialchars($data->email);
        $userRepo = new UserRepo;
        $user = $userRepo->checkEmailExists($email);

        if ($user){
          // If we find a user with the same  email we do a password Verify
            // Password verify works like : (password from the user NOT HASHED : compared to : Hashed password retrieved from the database)
            if (password_verify($password, $user['Password'])){
              // The passwords match 
              json_encode(["status" => "succes", "message" => "We succeded", "infoUser" => $user ]);
              include_once __DIR__. '/../views/teacher.php';
            } else {
              // Passwords does not match
              json_encode(["status" => "error", "message" => "password does not match"]);
            }
        } else {
        // If there are no user with this mail goes to the else and encode an error message
        json_encode(["status" => "error", "message" => "mail does not match"]);
        }
    
      } 
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

