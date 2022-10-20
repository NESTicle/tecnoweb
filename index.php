<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Tecno WEB</title>

    <link rel="icon" type="image/png" href="imagenes/icono.png" />
    <link href="estilos/bootstrap.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">
                Tecno WEB
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
                <?php 
                    if(isset($_SESSION['tecnoweb']['email'])) {
                        echo $_SESSION['tecnoweb']['email'];
                    }
                ?>
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/cursos.php">Cursos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login.php">Iniciar sesión</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div id="cursosCarrusel" class="carousel slide" data-bs-ride="true">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#cursosCarrusel" data-bs-slide-to="0" class="active"
                aria-current="true"></button>
            <button type="button" data-bs-target="#cursosCarrusel" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#cursosCarrusel" data-bs-slide-to="2"></button>
        </div>

        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="imagenes/df.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="imagenes/dff.png" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="imagenes/dfff.png" class="d-block w-100">
            </div>
        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#cursosCarrusel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#cursosCarrusel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Siguiente</span>
        </button>
    </div>

    <br>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h1>📚 Lista de cursos</h1>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card">
                                <img src="imagenes/html.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Curso completo de HTML</h5>
                                    <p class="card-text">El Lenguaje de Marcado de Hipertexto (HTML) es el código que se
                                        utiliza
                                        para estructurar y desplegar una página web y sus contenidos. Por ejemplo, sus
                                        contenidos
                                        podrían ser párrafos, una lista con viñetas, o imágenes y tablas de datos.</p>
                                    
                                    <a href="curso.php" class="btn btn-primary">
                                        ir al curso
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card">
                                <img src="imagenes/css.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Curso completo de CSS</h5>
                                    <p class="card-text">El código CSS hace la vida más fácil al desarrollador front-end
                                        al separar
                                        las estructura de un documento HTML de su presentación. Dicho de otro modo el
                                        HTML actuaría
                                        como es esqueleto de la web, definiendo su estructura básica, y el CSS añadiría
                                        toda la capa
                                        de personalización sobre...</p>
                                    <a href="#" class="btn btn-primary">ir al curso</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <div class="card">
                                <img src="imagenes/php.png" class="card-img-top">
                                <div class="card-body">
                                    <h5 class="card-title">Curso completo de PHP</h5>
                                    <p class="card-text">PHP es un lenguaje de programación para desarrollar
                                        aplicaciones y crear
                                        sitios web que conquista cada día más seguidores. Fácil de usar y en constante
                                        perfeccionamiento es una opción segura para aquellos que desean trabajar en
                                        proyectos
                                        calificados y sin complicaciones.</p>
                                    <a href="#" class="btn btn-primary">ir al curso </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12">
                            <footer class="py-3 my-4 border-top">
                                <span class="text-muted">@creado por julian y julio</span>
                            </footer>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="javascript/bootstrap.js"></script>
</body>

</html>