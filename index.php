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
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#" tabindex="-1" aria-disabled="true">Cadastrar</a>
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
            <h1 class="title">Notícias da Semana!</h1>
        </div>
    </div>
</div>


<div class="dropdown-divider"></div>

<div class="container cssColor cssBorder">
    <div class="row mt-3 text-center cssBorder shadow">

        <!-- Notícia 1 -->
        <div class="col-6 col-sm-4 col-md-4 mb-4 mb-sm-0 mb-md-0">
            <h3 class="pt-2">Título da notícia</h3>
            <div class="dropdown-divider"></div>
            <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis voluptate error aspernatur, at molestias eligendi necessitatibus ullam ratione reiciendis distinctio repudiandae, illum quisquam doloribus. Sint unde praesentium reprehenderit cupiditate doloremque.</p>
            <div class="container p-0">
                <div class="row text-justify">
                    <div class="col-12">
                        <img class="img-fluid" src="img/sem_foto.png" alt="SemFoto" height="150">
                    </div>
                    <div class="col-12 mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut maiores obcaecati harum tenetur quod, facilis facere in nisi amet eius perspiciatis? Sunt beatae quasi sint optio repudiandae facere est atque.</p>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary mb-2" type="button">Ver Mais</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notícia 2 -->
        <div class="col-6 col-sm-4 col-md-4">
            <h3 class="pt-2">Título da notícia</h3>
            <div class="dropdown-divider"></div>
            <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis voluptate error aspernatur, at molestias eligendi necessitatibus ullam ratione reiciendis distinctio repudiandae, illum quisquam doloribus. Sint unde praesentium reprehenderit cupiditate doloremque.</p>
            <div class="container p-0">
                <div class="row text-justify">
                    <div class="col-12">
                        <img class="img-fluid" src="img/sem_foto.png" alt="SemFoto" height="150">
                    </div>
                    <div class="col-12 mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut maiores obcaecati harum tenetur quod, facilis facere in nisi amet eius perspiciatis? Sunt beatae quasi sint optio repudiandae facere est atque.</p>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary mb-2" type="button">Ver Mais</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notícia 3 -->
        <div class="col-6 col-sm-4 col-md-4">
            <h3 class="pt-2">Título da notícia</h3>
            <div class="dropdown-divider"></div>
            <p class="text-justify">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Blanditiis voluptate error aspernatur, at molestias eligendi necessitatibus ullam ratione reiciendis distinctio repudiandae, illum quisquam doloribus. Sint unde praesentium reprehenderit cupiditate doloremque.</p>
            <div class="container p-0">
                <div class="row text-justify mb-5 mb-sm-0 mb-md-0">
                    <div class="col-12">
                        <img class="img-fluid" src="img/sem_foto.png" alt="SemFoto" height="150">
                    </div>
                    <div class="col-12 mt-3">
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut maiores obcaecati harum tenetur quod, facilis facere in nisi amet eius perspiciatis? Sunt beatae quasi sint optio repudiandae facere est atque.</p>
                    </div>
                    <div class="col-12 text-center">
                        <button class="btn btn-primary mb-2" type="button">Ver Mais</button>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
</div>
<?php
include_once "includes/footer.php";
?>