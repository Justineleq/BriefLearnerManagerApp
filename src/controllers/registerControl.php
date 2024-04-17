<?php

namespace src\controllers;

use src\services\Render;

class UserController
{
    use Render;


public function enterCodeInDatabase() {
    
    if(!empty(file_get_contents('php://input'))) {
        $data = json_decode(file_get_contents('php://input'));
}
}
}