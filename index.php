
    <?php

        require_once './core/Config.php';
        require_once './vendor/autoload.php';
        use Core\ConfigController as Home;
        $url = new Home;
        $url-> carregar();
    ?>
