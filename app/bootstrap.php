<?php

  session_start();

  // Load Config
  require_once 'config/config.php';

  // Autoload Core Libraries
  function Autoloader($class) {
    $paths = [
        APPROOT."/libraries/",
        APPROOT."/services/interfaces/",
        APPROOT."/services/implementations/",
        APPROOT."/models/"
    ];


    foreach ($paths as $path) {
        $file = $path . $class . '.php';
        if (file_exists($file)) {
            require_once $file;
        }
    }
}


spl_autoload_register('Autoloader');

  
