<?php
    $lat1 = $_GET['lat'];
    $long1 = $_GET['long'];

    $lat2 = -22.43009829824394;
    $long2 = -45.43558207031218;
    $d = sqrt(($lat1-$lat2)**2 + ($long1-$long2)**2);
    $S = 1210;
    $s =  0.011612123699757;
    $D = ($d*$S)/$s;
    header('Location: ../?d='.$D);
    exit;
?>
