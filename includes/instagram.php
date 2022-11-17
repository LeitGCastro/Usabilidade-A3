<section id="insta">
    <div class="container">
        <div class="">
            <div class=" col-md-12">
                <h3 class="title-insta text-center">
                    INSTAGRAM
                </h3>
            </div>
            <?php
            //variaveis de controle
            $tokenInstagram = "IGQVJWaWJ2ZAjFtUGFWNkZAwX2ZAJdmYzVjZALWDhzcFhtY2NPVnhIaXVMSEpKWkFxM2F6SFNiQjQ4b2lqZAU5NNU1NTjdGSlZAOTi1jQ2hQSGNBbUlqU0gzRjVjQ3VDQWFNc21DNGR5cUdJT294LXRSN0ZApbwZDZD";
            
            //Url
            $pastaEPagina = explode("/",$_SERVER['PHP_SELF']);
            $pastaDominio = "";

            for($i=0; $i < count($pastaEPagina); $i++){
                if(substr_count($pastaEPagina[$i], ".") == 0){
                    $pastaDominio .= $pastaEPagina[$i]."/";
                }
            }
            $url = "http://".$_SERVER['HTTP_HOST'].$pastaDominio;



            function processURL($url) // essa url vai receber a UrlInsta

            {
                $ch = curl_init(); // cURL gera um requisição que vai ser passada para url de destino 
                curl_setopt_array($ch, array(
                    CURLOPT_URL => $url, //url para qual vai ser feita a requisição
                    CURLOPT_RETURNTRANSFER => true, // indica que vai ser enviada um string
                    CURLOPT_SSL_VERIFYPEER => false, // O proto SSL tem certificado de autenticação que diz se a página de destino é a correta ou n, isso desliga esse certificado 
                    CURLOPT_SSL_VERIFYHOST => 2 // diz para o navegador que realmente é o server correto para fazer a conexão **pode estar errada essa info kk**
                ));

                $result = curl_exec($ch); // variavel result recebe o que o cURL_execute retornar
                curl_close($ch); // finaliza processo
                return $result;
            }


            $urlInsta = 'https://graph.instagram.com/me/media?fields=id,caption,media_url,permalink,media_type&access_token='.$tokenInstagram; //Url e token para fazer a linkagem
            
            $all_result = processURL($urlInsta);
            $decoded_results = json_decode($all_result, true); // Faz a url ser interpretada com o json
            ?>

            <div class="container">
                <div class="itens-insta">
                   <div class="row">


                        <?php
                        $i = 0;
                        foreach ($decoded_results['data'] as $item) {
                            if ($item["media_type"] == "IMAGE") {
                                $i++;
                                $full = $item['media_url']; // link para puxar a imagem do insta 
                                $urlImg = $item['permalink']; // link para redirecionar para o post do insta
                                // $descricao = $item['caption']; 
                        ?>
                                <div class=" demo-4 ajusta-insta">

                                    <figure>
                                        <a href="<?php echo $urlImg ?>" target="_blank" class="ajust-a-galeria">
                                            <img class="imageinsta" src="<?php echo $full; ?>" alt="<?php echo $descricao; ?>" title="<?= $h1 ?>" />
                                        </a>

                                        <!-- firula -->
                                        <div class="insta-container">
                                            <div class="insta-icon">
                                                <a href="<?php echo $urlImg ?>" target="_blank" class="ajust-a-galeria">
                                                    <i class="fab fa-instagram"></i>
                                                </a>
                                            </div>
                                        </div>
                                        <!-- firula -->
                                    </figure>
                                </div>
                        <?php
                                if ($i == 3) {
                                    break;
                                }
                            }
                        }
                        ?>
                    </div>
                </div>
            </div>
</section>