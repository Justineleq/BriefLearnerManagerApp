<?php
namespace src\repositories;

use src\models\Database;

class registerRepo extends Database {

    private $Db;

    public function __construct()
    {
        $database = new Database;
        $this->Db = $database->getDB();
  
      require_once __DIR__ . '/../../config.php';
    }

    public function createRegisterContents($registerContents)  {
        $sql = "INSERT INTO signapp_register (Code, Date_Time, Start_Time, End_Time, Id_SIGNAPP_Course_class) VALUES (:Code, :Date_Time, :Start_Time, :End_Time, :Id_SIGNAPP_Course_class";

        $request = $this->Db->prepare($sql);

        $request->execute([
            'Code' => $registerContents->getCode(),
            'Date_Time' => $registerContents->getDateTime(),
            'Start_Time' => $registerContents->getStartTime(),
            'Id_SIGNAPP_Course_class' => $registerContents->getEndTime(),
           
        ]);

        return $request->fetch();

        
    }
}