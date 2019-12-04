<?php

spl_autoload_register(function($classname){
    // echo $classname;
    $filename = $classname.".php";
    // echo $filename;
    if(file_exists($filename)) {
        require $filename;
    }
    
});