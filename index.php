<?php    
    require('secao.php');
    require('secao/head.php');
/*    foreach($secoes as $indice => $sec){
        if($sec["body"]){
            $mode = "secao";
            include('secao/'.$sec["file"].'.php');
        }
    }
*/
    foreach($ordem_secoes as $sec){
        if($secoes[$sec]['body']){
            $mode = "secao";
            include('secao/'.$secoes[$sec]["file"].'.php');
        }
    }


    require('secao/footer.php');

?>


