<?php
    $path = ltrim($_SERVER['REQUEST_URI'], '/');    // Trim leading slash(es)
    $elements = explode('/',$path);
    if(strcmp($elements[0],'geo') == 0){
        $lat = $elements[1];
        $long = $elements[2];
        require 'geolocation.php';
    }else{
        header('Location: /home.php');
    }
?>