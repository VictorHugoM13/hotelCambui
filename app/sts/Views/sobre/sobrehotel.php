<?php

    extract($this->Dados['sts_sobre'][0]);

?>

<main role="main">
    <div class="jumbotron sobre-empresa">
        <div class="container">
            <h2 class="display-4 text-center" style="margin-bottom: 40px;"><?php echo $titulo_principal;?></h2>
            <div class="row featurette">
                <div class="col-md-7 order-md-2 sobre-emp-text">
                    <h2 class="featurette-heading"><?php echo $titulo_secundario_um;?></h2>
                    <p class="lead"><?php echo $descricao_um;?></p>
                </div>
                <div class="col-md-5 order-md-1 sobre-emp-img">
                    <img class="featurette-image img-fluid mx-auto" src="<?php echo URL;?>assets/imagens/<?php echo $imagem_um;?>" alt="Generic placeholder image">
                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7 sobre-emp-text">
                    <h2 class="featurette-heading"><?php echo $titulo_secundario_dois;?></h2>
                    <p class="lead"><?php echo $descricao_dois;?></p>
                </div>
                <div class="col-md-5 sobre-emp-img">
                    <img class="featurette-image img-fluid mx-auto" src="<?php echo URL;?>assets/imagens/<?php echo $imagem_dois;?>" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2 sobre-emp-text">
                    <h2 class="featurette-heading"><?php echo $titulo_secundario_tres;?></h2>
                    <p class="lead"><?php echo $descricao_dois;?></p>
                </div>
                <div class="col-md-5 order-md-1 sobre-emp-img">
                    <img class="featurette-image img-fluid mx-auto" src="<?php echo URL;?>assets/imagens/<?php echo $imagem_tres;?>" alt="Generic placeholder image">
                </div>
            </div>

</main>