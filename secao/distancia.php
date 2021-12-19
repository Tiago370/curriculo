
        <script>
            function calc(){
                var watchID = navigator.geolocation.watchPosition(success, error, {
                    enableHighAccuracy: true,
                    timeout: 5000
                })
            }
            function fazGet(url){
                let request = new XMLHttpRequest()
                request.open("GET",url, false)
                request.send()
                return request.responseText
            }
            function success(pos){
                var data = fazGet("http://localhost:8000/geo/"+pos.coords.latitude.toString().replace(".", ",")+"/"+pos.coords.longitude.toString().replace(".", ","))
                var resultado = JSON.parse(data);
                var p = document.getElementById("result-dist");
                p.innerHTML = "Você está a "+resultado['distancia']+" "+resultado['unidade'].replace("kilo&circmtros", "kilômetros") + " da minha residência."
            }

            function error(err){
                console.log(err)
                var p = document.getElementById("result-dist");
                p.innerHTML = "Não foi possível receber a sua localização."
            }
    </script>

<section id="hero-text" class="wow fadeIn">
    <div class="container">
            <div class="row">
                <h2>...</h2>
                <div class="col-sm-9">
                    <h2>Quer saber a distância que eu estou de você?</h2>
                    <p>Se você é um recrutador, talvez queira saber a que distância minha residência está da sua empresa. Clique no botão do lado que a distância será caculada.</p>
                    <p><b id="result-dist"></b></p>
                </div>
                <div class="col-sm-3 text-right">
                    <a class="btn btn-primary btn-lg" onclick="calc()">Calcular distância</a>
                </div>
            </div>
        </div>
    </section><!--/#hero-text-->

