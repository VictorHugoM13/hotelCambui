<main role="main">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">

<?php

    //echo "<h1>Arquivo home.php</h1>";
    //var_dump($this->Dados);
    $cont = 1;
    foreach ($this->Dados['sts_carousels'] as $carousel) {
        /*'id' => string '2' (length=1)
          'nome' => string 'Segundo Exemplo' (length=15)
          'imagem' => string 'logo3.fw.png' (length=12)
          'titulo' => string 'PÓS-GRADUAÇÃO ONLINE' (length=23)
          'descricao' => string 'Aprendizagem que conecta com Internet grátis!' (length=46)
          'posicao_text' => string 'text-left' (length=9)
          'titulo_botao' => string 'INSCREVA-SE' (length=11)
          'link' => string 'https://faex.edu.br' (length=19)
          'ordem' => string '2' (length=1)
          'adms_cor_id' => string '5' (length=1)
          'adms_sit_id' => string '1' (length=1)
          'created' => string '2018-05-23 00:00:00' (length=19)
          'modified' => string '2020-08-20 23:21:04' (length=19)
         */
        extract($carousel);
?>
        <div class="carousel-item <?php if ($cont == 1) { echo "active";} ?>">
            <img class="first-slide img-fluid" src="<?php echo URL;?>assets/imagens/<?php echo $imagem;?>" alt="Primeiro conteúdo">
            <div class="container">
                <div class="carousel-caption <?php echo $posicao_text;?>">
                    <h1 class="d-none d-md-block"><?php echo $titulo;?></h1>
                    <p class="d-none d-md-block"><?php echo $descricao;?></p>
                    <p class="d-none d-md-block"><a class="btn btn-lg btn-danger" href="<?php echo $link;?>" role="button"><?php echo $titulo_botao;?></a></p>
                </div>
            </div>
        </div>
<?php
        $cont++;
    }

?>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</main>

