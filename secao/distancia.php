    <script>
        function calcular(){
            var watchID = navigator.geolocation.watchPosition(success, error, {
            enableHighAccuracy: true,
            timeout: 5000
            })
        }

        function success(pos){
            window.location.href = "aplications/geolocation.php?lat="+pos.coords.latitude+"&long="+pos.coords.longitude
        }

        function error(err){
            console.log(err)
        }

    </script>
    <section id="hero-text" class="wow fadeIn">
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <h2>Quer saber a distância que eu estou de você?</h2>
                    <p>Se você é um recrutador, talvez queira saber a que distância minha residência está da sua empresa. Clique no botão do lado que a distância será caculada.</p>
                    <?php
                        if(isset($_GET['d'])){
                            $d = intval($_GET['d'])/1000;
                            echo '<p><b>Você está a '.$d.' Km da minha residência.</b></p>';
                            echo '<script>window.location.href = "#hero-text"</script>';
                        }
                    ?>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" href="#" onclick="calcular()">Calcular distância</a>
                </div>
            </div>
        </div>
    </section><!--/#hero-text-->

