<?php

    if (!isset($_SESSION)) {
        session_start();
    }
    ob_start();
    define('URL', 'http://localhost/siteHotel/');
    define('URLADM', 'http://localhost/siteHotel/adm');

    define('CONTROLLER', 'Home');
    define('METODO', 'index');

    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASS', '');
    define('DBNAME', 'hotelcambui');
    define('PORT', '3307');
