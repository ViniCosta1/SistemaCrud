<?php
session_start();
include_once "includes/header.php";
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
                <a class="navbar-brand text-light">Notícias <i class="fa-solid fa-newspaper"></i></a>
                <button class="navbar-toggler" data-target="#my-nav" data-toggle="collapse" aria-controls="my-nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div id="my-nav" class="collapse navbar-collapse">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Home</a>
                        </li>
                        <li class="nav-item active">
                            <a class="nav-link" href="cadastrar.php">Cadastrar<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Editar</a>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</div>

<div class="jumbotron bg-transparent">
    <div class="row">
        <div class="col-12 text-center mt-3">
            <h1 class="title pb-0">Cadastrar Notícia</h1>
            <div class="dropdown-divider mb-0"></div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <form method="post" action="php-actions/createNews.php">
                Título da Notícia: <input class="form-control mb-3" type="text" name="titulo" required>
                Autor: <input type="text" class="form-control mb-3" name="autor" required>

                <!-- Depois, criar uma tabela no banco ("categorias") e colocar essas opções nessa tabela, com a 
                função de poder colocar mais opções-->
                <label for="exampleFormControlSelect1">Categorias</label>
                <select class="form-control mb-3" id="exampleFormControlSelect1" name="opcao">
                    <option>Escolher:</option>
                    <option>Política</option>
                    <option>Entreterimento</option>
                    <option>Polêmica</option>
                    <option>Ao Redor do Mundo</option>
                    <option>Outros</option>
                </select>
                <label for="exampleFormControlTextarea1">Texto:</label>
                <textarea class="form-control mb-3" id="textarea1" rows="4" name="text" required></textarea>
                Imagens: <input type="file" class="mb-3" name="img" accept="image/*"> <br>
                <button class="btn btn-primary" type="submit" name="enviar">Cadastrar</button>
            </form>

            <?php
                if (isset($_SESSION['categoria'])):
                    echo $_SESSION['categoria'];
                endif;
                session_unset();
            ?>
            
        </div>
    </div>
</div>
<?php
include_once "includes/footer.php";
?>