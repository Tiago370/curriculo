<?php
    function getDistanceFromLatLonInKm($lat1,$lon1,$lat2,$lon2) {
        $R = 6371; // Radius of the earth in km
        $dLat = deg2rad($lat2-$lat1);  // deg2rad below
        $dLon = deg2rad($lon2-$lon1); 
        $a = sin($dLat/2) * sin($dLat/2) + cos(deg2rad($lat1)) * cos(deg2rad($lat2)) * sin($dLon/2) * sin($dLon/2);
        $c = 2 * atan2(sqrt($a), sqrt(1-$a)); 
        $d = $R * $c; // Distance in km
        return $d;
    }
    $order   = array(",");
    $replace = '.';

    $latn = str_replace($order, $replace, $lat);
    $longn = str_replace($order, $replace, $long);
    require 'localizacao.php';
    $saida = getDistanceFromLatLonInKm(floatval($latn), floatval($longn),$latLocal, $longLocal);
    http_response_code(200);
    $unidade = '';
    if($saida >= 1){
        $unidade = 'kilo&circmtros';
        $saida*=1000;
        $saida = intval($saida);
        $saida/=1000;
    }else{
        $unidade = 'metros';
        $saida*=1000;
        $saida = intval($saida);
    }
    echo json_encode(Array('status' => 'success', 'distancia' => $saida, 'unidade' => $unidade));
?>  
