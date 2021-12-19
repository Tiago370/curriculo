<?php    
    $secoes = array(
        "home" => array("nome" => "Home", "id" => "hero-banner","file" => "banner", "navbar" => true, "body" => true),
        "distancia" => array("nome" => "Calcular Distância", "id" => "hero-text","file" => "distancia", "navbar" => true, "body" => true),
        "interesses" => array("nome" => "Interesses", "id" => "features","file" => "interesses", "navbar" => false, "body" => true),
        "sobre_eu" => array("nome" => "Sobre Eu", "id" => "about","file" => "sobre_eu", "navbar" => true, "body" => true),
        "outros_interesses" => array("nome" => "Outros Interesses", "id" => "services","file" => "outros_interesses", "navbar" => false, "body" => true),
        "portfolio" => array("nome" => "Portfólio", "id" => "portfolio","file" => "portfolio", "navbar" => false, "body" => true),
        "nosso_time" => array("nome" => "Nosso Time", "id" => "our-team","file" => "nosso_time", "navbar" => false, "body" => true),
        "estatistica_do_site" => array("nome" => "Estatisticas do Site", "id" => "business-stats","file" => "estatistica_do_site", "navbar" => false, "body" => true),
        "planos" => array("nome" => "Planos", "id" => "pricing","file" => "planos", "navbar" => false, "body" => true),
        "depoimentos" => array("nome" => "Depoimentos", "id" => "testimonial","file" => "depoimentos", "navbar" => false, "body" => true),
        "contato" => array("nome" => "Contato", "id" => "contact-us","file" => "contato", "navbar" => false, "body" => true)
    );

    function getRank(){
        // Meu arquivo
        $arquivo = 'acessos.txt';
        $dados_secoes = array();
        // Verifica se o arquivo existe
        if ( file_exists( $arquivo ) ) {
            // Envia cada linha do array para um índice de um array
	        $handle = file( $arquivo  );

	        // Faz o laço
	        foreach ($handle as $linha) {
		        // Lê uma linha do arquivo (se existir) 
		        $ler = $linha;
                $vetor = explode(" ", $ler);
                $dados_secoes[$vetor[0]] = intval($vetor[1]);
		        // Mostra dados na tela
		        //echo $ler.'<br>';
	        }
            arsort($dados_secoes);
            //print_r($dados_secoes);
            $sequencia = array();
            foreach ($dados_secoes as $sec => $qtd){
                array_push($sequencia, $sec);
            }
            //print_r($sequencia);
            return $sequencia;
        }
    }
    $ordem_secoes = getRank();
?>
