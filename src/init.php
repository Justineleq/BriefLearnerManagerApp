<?php
require_once __DIR__ . '/autoload.php';

// Start the session :
session_start();

// Check that the database exists
require_once __DIR__ . "/../config.php";

// if (DB_INITIALIZED == FALSE) {
//   $db = new src\models\Database();
//   echo $db->initialisationDb();
// }

require_once __DIR__ . "/router.php";