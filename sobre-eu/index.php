<?php
    require '../rank.php';
    atualiza("sobre_eu",'../acessos.txt');
    require('../secao.php');
    require('../secao/head.php');
    $mode = 'pagina';
    require('../secao/sobre_eu.php');
    require('../secao/footer.php');
?>
