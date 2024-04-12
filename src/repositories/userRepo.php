<?php



class UserRepo extends Database{

    private $Db;

    public function __construct()
    {
      $database = new Database;
      $this->Db = $database->getDB();
  
      require_once __DIR__ . '/../../config.php';
    }

    public function checkEmailExists($email) {
        $sql = "SELECT * FROM  signapp_user WHERE Email= :email";

        $request = $this->Db->prepare($sql);

        $request->execute(['email' => $email]);

        return $request->fetchAll();

    }
}