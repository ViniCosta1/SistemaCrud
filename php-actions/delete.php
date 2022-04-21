<?php
include_once "../db_connect.php";
session_start();

if(isset($_GET['id'])):
    $id = mysqli_escape_string($connect, $_GET['id']);
    $sql = "DELETE FROM noticia WHERE id = '$id'";

    if (mysqli_query($connect, $sql)):
        $_SESSION['mensagem'] = "Deletado com sucesso!";
        header('Location: ../index.php');
    else:
        $_SESSION['mensagem'] = "Erro ao deletar notícia";
        header('Location: ../index.php');
    endif;
endif;