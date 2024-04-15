<?php
 namespace src\Controllers;

use Database;
use src\Repositories\UserRepo;
use src\Services\Render;

// require_once __DIR__ . '/../services/Render.php';
// require_once __DIR__ . '/../repositories/userRepo.php';
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

        if ($users){
          // If we find a user with the same  email we do a password Verify
            // Password verify works like : (password from the user NOT HASHED : compared to : Hashed password retrieved from the database)
            if (password_verify($password, $users['Password'])){
              // The passwords match 
              json_encode(["status" => "succes", "message" => "We succeded", "infoUser" => $users ]);
            } else {
              // Passwords does not match
              json_encode(["status" => "error", "message" => "password does not match"]);
            }
        } else {
        // If there are no user with this mail we goes to the else and encode an error message
        json_encode(["status" => "error", "message" => "mail does not match"]);
        }
        var_dump($users);
      } 

      $passwordHash = password_hash($password, PASSWORD_DEFAULT);
      
      if(password_verify($password, $passwordHash)) {
        header('location: '. HOME_URL . 'teacher');
      }

      
    }
  }
  // public function Auth()
  // {
  //     if (isset($_POST['email']) && isset($_POST['inputPassword']) && !empty($_POST['email']) && !empty($_POST['inputPassword'])) 
  //     {
  //     $Db = new Database;
  //     $userInDatabase = $Db->getDb();
  //     $userRepo = new UserRepo;
  //     $userRepo->checkEmailExists($_POST ['email']);
  //     if ($userInDatabase) 
  //     {
  //     if(password_verify($_POST ['inputPassword'], $userRepo->checkPassword('inputPassword')))
  //     die();
  //     } else {
  //     header('location: '.HOME_URL.'?error=connected');
  //     }
  //       }
  //     }
    
    }  



    
    
    
  


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

