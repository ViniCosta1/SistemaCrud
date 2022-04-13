<?php
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
            <h1 class="title pb-0">Notícias da Semana!</h1>
            <div class="dropdown-divider"></div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <form method="post" action="">
                Título da Notícia: <input class="form-control mt-2" type="text" name="titulo">
                Categorias: <input class="form-control mt-2" type="text" name="categorias">
                Texto: <input class="form-control mt-2" type="text" name="texto" height="200px">
                Imagens: <input type="file" class="mt-2" name="img">
            </form>
        </div>
    </div>
</div>
<?php
include_once "includes/footer.php";
?>