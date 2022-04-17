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
                        <li class="nav-item">
                            <a class="nav-link" href="index.php" tabindex="-1" aria-disabled="true">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="cadastrar.php">Cadastrar<span class="sr-only">(current)</span></a>
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

<!-- Select -->
<?php
    if(isset($_GET['id'])):
        $id = mysqli_escape_string($connect, $_GET['id']);
        $sql = "SELECT * FROM noticia WHERE id = '$id'";
        $resultado = mysqli_query($connect, $sql);
        $dados = mysqli_fetch_array($resultado);
?>

<div class="container">
    <div class="row">
        <div class="col-12 col-sm-12 col-md-12">
            <form method="post" action="php-actions/update.php">
                <input type="hidden" name="id" value="<?php echo $dados['id']; ?>">

                Título da Notícia: <input class="form-control mb-3" type="text" name="titulo" value="<?php echo $dados['titulo']; ?>" required>
                Autor: <input type="text" class="form-control mb-3" name="autor" value="<?php echo $dados['autor']; ?>" required>

                <!-- Depois, criar uma tabela no banco ("categorias") e colocar essas opções nessa tabela, com a 
                função de poder colocar mais opções-->
                <label for="exampleFormControlSelect1">Categorias</label>
                <select class="form-control mb-3" id="exampleFormControlSelect1" name="opcao">
                    <option <?php if ($dados['categoria'] == "Escolher:") echo "selected"?>>Escolher:</option>
                    <option <?php if ($dados['categoria'] == "Política") echo "selected"?>>Política</option>
                    <option <?php if ($dados['categoria'] == "Entreterimento") echo "selected"?>>Entreterimento</option>
                    <option <?php if ($dados['categoria'] == "Polêmica") echo "selected"?>>Polêmica</option>
                    <option <?php if ($dados['categoria'] == "Ao Redor do Mundo") echo "selected"?>>Ao Redor do Mundo</option>
                    <option <?php if ($dados['categoria'] == "Outros") echo "selected"?>>Outros</option>
                </select>
                <label for="exampleFormControlTextarea1">Texto:</label>
                <textarea class="form-control mb-3" id="textarea1" rows="4" name="texto" required>
                    <?php echo $dados['texto']; ?>
                </textarea>
                Imagens: <input type="file" class="mb-3" name="img" accept="image/*"> <br>
                <button class="btn btn-primary" type="submit" name="editar">Atualizar</button>
            </form>

            <?php
                endif;
            ?>

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