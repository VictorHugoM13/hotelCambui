<?php


    foreach ($this->Dados['sts_quarto'] as $quarto) {
        extract($quarto);
    
?>
<main role="main">
    <div class="jumbotron sobre-empresa">
        <div class="container">
            <h2 class="display-4 text-center" style="margin-bottom: 40px;">Quartos</h2>
            <div class="row featurette">
                <div class="col-md-7 order-md-2 sobre-emp-text">
                    <h2 class="featurette-heading"><?php echo $tipo_quarto;?></h2>
                    <p class="lead"><?php echo $descricao;?></p>
                </div>
                <div class="col-md-5 order-md-1 sobre-emp-img">
                    <img class="featurette-image img-fluid mx-auto" src="<?php echo URL;?>assets/imagens/<?php echo $imagem;?>" alt="Generic placeholder image">
                </div>
            </div>
            <hr class="featurette-divider">

        </div>
    </div>
<?php
}
?>


</main>