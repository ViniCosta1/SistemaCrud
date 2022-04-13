<?php
$servername = "sql103.epizy.com";
$usename = "epiz_31509991";
$password = "tipGWwG88g34m5h";
$db_name = "epiz_31509991_noticias";

// * Conexão
$connect = mysqli_connect($servername, $usename, $password, $db_name);

if (mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;