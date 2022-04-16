<?php
session_start();
include_once "db_connect.php";
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
                        <li class="nav-item active">
                            <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrar.php" tabindex="-1" aria-disabled="true">Cadastrar</a>
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
            <?php
            if (isset($_SESSION['mensagem'])) :
                echo $_SESSION['mensagem'];
            endif;
            session_unset();
            ?>
            <h1 class="title pb-0">Notícias</h1>
            <div class="dropdown-divider mb-0"></div>
        </div>
    </div>
</div>

<div class="container cssColor cssBorder">
    <div class="row mt-3 text-center cssBorder shadow">

        <!-- Notícias -->
        <?php
        $sql = "SELECT * FROM noticia";
        $resultado = mysqli_query($connect, $sql);

        while ($dados = mysqli_fetch_array($resultado)):
        ?>
        <div class="col-12 col-sm-6 col-md-4 mb-4 mb-sm-0 mb-md-0">
            <h3 class="pt-2">
                <?php echo $dados['titulo'];?>
            </h3>

            <h5 class = "text-left"><?php echo $dados['categoria'];?></h5>
            <h5 class = "text-left"><?php echo $dados['autor'];?></h5>

            <div class="dropdown-divider"></div>
            <div class="col-12">
                <img class="img-fluid" src="img/sem_foto.png" alt="SemFoto" height="150">
            </div>
            <p class="text-justify">
                <?php
                echo $dados['texto'];
                ?>
            </p>
            <div class="container p-0">
                <div class="row text-justify">
                    <div class="col-12 mt-3">
                        <p><?php echo $dados['texto'];?></p>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary mb-4" type="button">Ver Mais</button>
                    </div>
                </div>
            </div>
        </div>
        <?php endwhile;?>
    </div>
</div>
</div>
<?php
include_once "includes/footer.php";
?>