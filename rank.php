<?php
function atualiza($secao,$arquivo){
    $dados_secoes = array();
    // Verifica se o arquivo existe
    if(file_exists($arquivo)){
        // Envia cada linha do array para um índice de um array
        $handle = file($arquivo);
        // Faz o laço
        foreach($handle as $linha){
            // Lê uma linha do arquivo (se existir) 
            $ler = $linha;
            $vetor = explode(" ", $ler);
            $dados_secoes[$vetor[0]] = intval($vetor[1]);
            // Mostra dados na tela
            //echo $ler.'<br>';
        }
    }
    $dados_secoes[$secao]++;
    $fp = fopen($arquivo, "w+");

    //Escreve no arquivo aberto.
    $quebra = chr(13).chr(10);
    foreach($dados_secoes as $sec => $qtd){
        fwrite($fp, $sec.' '.$qtd.$quebra);
    }
    //Fecha o arquivo.
    fclose($fp);
    //print_r($dados_secoes);
}
?>