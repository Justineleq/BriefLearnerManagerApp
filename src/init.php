<?php

use src\models\Database;

require_once __DIR__ . '/autoload.php';

session_start();

require_once __DIR__ . '/../config.php';

$database = new Database;

$database->getDb();

require_once __DIR__ . "/router.php";