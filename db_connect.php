<?php
// * Nota: Essa conexão funciona para o XAMPP, mas os arquivos do site já estão alterados
$servername = "localhost";
$usename = "root";
$password = "";
$db_name = "SiteNoticias";

// * Conexão
$connect = mysqli_connect($servername, $usename, $password, $db_name);

if (mysqli_connect_error()):
    echo "Falha na conexão: ".mysqli_connect_error();
endif;