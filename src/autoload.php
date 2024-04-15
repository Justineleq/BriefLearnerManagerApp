<?php

function classLoader($class)
{
try {
    if(str_contains($class, 'src')) {
        $class = str_replace('src','',$class);
        $class = str_replace('\\','/',$class);
        require_once __DIR__ . $class . '.php';
    }

    else {
        throw new Error("The class $class ca not be found");
    }
} catch (Error $e) {
    echo "Error : " . $e->getMessage();
}
    





}

spl_autoload_register('classLoader');
