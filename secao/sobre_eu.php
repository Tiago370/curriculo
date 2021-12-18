    <section id="about">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title text-center wow fadeInDown">Sobre Eu</h2>
                <p class="text-center wow fadeInDown">Sou um cara apaixonado por códigos, algoritmos, e uma "matematicazinha".</p>
            </div>
            <div class="row">
                <div class="col-sm-6 wow fadeInLeft">
                    <img class="img-responsive" src="images/tiago1.jpg" alt="">
                </div>
                <div class="col-sm-6 wow fadeInRight">
                    <h3 class="column-title">Minha História Com Programação</h3>
                    <p>Meu primeiro "contato" com computador foi quando eu assisti o <i>Jurassic Park</i>. Nesse filme o programador ganhava muito pouco, aí pra complementar a renda ele destravou o sistema para roubar uns embriões e os bichos acabaram escapando.</p>
                    <p>Eu sou da época dos Mamonas Assassinas, quase ninguém tinha computador em casa. Eu só via um computador de perto (pela parte de trás do monitor) quando eu tinha crise de pneumonia e minha mãe me levava no hospital. Lá tinha um computador com uma impressora barulhenta. Era um computador inútil, não tinha nenhum dinossauro pra escapar lá de dentro do hospital.</p>
                    <p>No começo dos anos 2000 eu vi um computador de perto (uns dois metros de distância pela parte da frente), a patroa da minha mãe tinha comprado um. Embora lá também não tinha dinossauro, o computador de lá era um pouco mais útil. Escrevia, desenhava, entrava no site da Sandy e Junior, e mostrava fotos dos Ataques de 11 de setembro de 2001.
                </div> <!--/col-sm-6 wow fadeInRight-->
                    <?php
                        if(strcmp($mode, "secao") == 0){
                            echo '<a class="btn btn-primary" href="/sobre-eu">Continuar lendo essa estorinha triste</a>';
                        }else{
                            require('sobre_eu2.php');
                        }
                    ?>
                </div> <!--/col-sm-12 wow fadeInRight-->
            </div>
        </div>
    </section><!--/#about-->

