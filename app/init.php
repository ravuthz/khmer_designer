<?php

session_start();

spl_autoload_register(function($class){
    require_once 'AppCore/' . $class . '.php';
});

//require_once 'Config/Configure.php';

?>