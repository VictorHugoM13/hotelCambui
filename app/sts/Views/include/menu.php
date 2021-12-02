<header>
    <nav class="navbar navbar-expand-md navbar-dark bg-danger">
        <div class="container">
            <a href="home"><img class="rounded-circle mr-3" src="<?php echo URL;?>assets/imagens/logo.png" alt="Logo do Hotel"></a>
            <a class="navbar-brand" href="Home">Hotel Cambuí</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav m-auto">
                    <li class="nav-item menu">
                        <a class="nav-link" href="Home">Home </a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="SobreHotel">Sobre o Hotel</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="Quartos">Quartos</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="Contato">Contato</a>
                    </li>
                    <li class="nav-item menu">
                        <a class="nav-link" href="Reservas">Reservas</a>
                    </li>

                </ul>
                <ul class="navbar-nav ml-auto">
                    <?php

                        if (isset($_SESSION['email'])) {
                            ?>
                    <li class="nav-item menu">
                        <a class="nav-link" href="login"><?php echo $_SESSION['nome'];?> </a>
                    </li>
                    <li class="nav-item menu">
                          <a class="nav-link" href="login">Sair </a>
                    </li>
                                <?php
                        }

                        else {
                            ?>
                                <li class="nav-item menu">
                                    <a class="nav-link" href="login">Login </a>
                                </li>
                            <?php
                        }
                    ?>

                </ul>




            </div>

        </div>
    </nav>
</header>