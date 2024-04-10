<?php

namespace src\models;

final class Database {
    private $db;
    private $config;

    public function __construct(){
        $this->config = __DIR__ ."../../config.php";
        require_once $this->config;
        $this->connexionDB();
      }
}