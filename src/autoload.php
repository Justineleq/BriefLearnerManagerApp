<?php

function classLoader($className)
{
    $filePathClass = $className . '.php';


    $folderPathModels = __DIR__ . '/models/';
    $folderPathRepositories = __DIR__ . '/repositories/';
    $folderPathControllers = __DIR__ . '/controllers/';


    if (file_exists($folderPathModels . $filePathClass)) {
        require $folderPathModels . $filePathClass;
    }

    if (file_exists($folderPathRepositories . $filePathClass)) {
        require $folderPathRepositories . $filePathClass;
    }

    if (file_exists($folderPathControllers . $filePathClass)) {
        require $folderPathControllers . $filePathClass;
    }
}

spl_autoload_register('classLoader');
