<?php

// Load classes and repositories on demand :
function ChargerClasses($class)
{
  try {
    if(str_contains($class, "src")){
      $class = str_replace('src', '', $class);
      $class = str_replace('\\', '/', $class);
      require_once __DIR__. $class . ".php";
    }
    else {
      throw new Error("The class $class can't be found.");
    }
  } catch (Error $e) {
    echo "An error has occurred : " . $e->getMessage();
  }
}

// The demand :
spl_autoload_register('ChargerClasses');