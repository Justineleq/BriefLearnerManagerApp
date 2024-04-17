<?php
namespace src\models;

use Exception;
use PDO;

require_once __DIR__ . "/../../config.php";

class Database
{
    private $db;

    public function __construct()
    {
        try {
            $this->db = new PDO(
                'mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8',
                DB_USER,
                DB_PWD
            );
        } catch (Exception $error) {
            die('Error : ' . $error->getMessage());
        }
    }

    public function getDb()
    {
        return $this->db;
    }
}