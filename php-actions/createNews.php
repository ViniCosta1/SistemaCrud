<?php
session_start();
include_once "../db_connect.php";

if (isset($_POST['enviar'])):
    $titulo = $_POST['titulo'];
    $autor = $_POST['autor'];
    $categoria = $_POST['opcao'];
    $texto = $_POST['texto'];

    if ($categoria != "Escolher:"):
        

        $sql = "INSERT INTO noticia (titulo, categoria, autor, texto) VALUES ('$titulo', '$categoria', '$autor', '$texto')";
    
        if(mysqli_query($connect, $sql)):
            $_SESSION['mensagem'] = "Cadastrado com sucesso!";
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