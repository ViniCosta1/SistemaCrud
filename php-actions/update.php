<?php
session_start();
include_once "../db_connect.php";

if (isset($_POST['editar'])):
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['opcao'];
    $texto = $_POST['texto'];

    if ($categoria != "Escolher:"):
        $id = $_POST['id'];

        $sql = "UPDATE noticia SET titulo = '$titulo', autor = '$autor', categoria = '$categoria', texto = '$texto' WHERE id = '$id'";
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Atualizado com sucesso!";
            header('Location: ../index.php');
        else:
            $_SESSION['mensagem'] = "Erro ao cadastrar";
            header('Location: ../index.php');
        endif;
    else:
        $_SESSION['categoria'] = "<strong>Por favor, selecione uma categoria!</strong>";
        header("Location: ../cadastrar.php");
    endif;
endif;