<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Cursos | Tecno WEB</title>

    <link rel="icon" type="image/png" href="imagenes/icono.png" />
    <link href="estilos/bootstrap.css" rel="stylesheet">
</head>

<body>
    <nav class="navbar navbar-dark bg-primary mb-3">
        <div class="container-fluid">
            <a class="navbar-brand" href="/index.php">
                Tecno WEB
            </a>

            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
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

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-12 mb-3">
                            <h1>📚 Curso Completo de HTML</h1>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-12 col-md-8">
                            <div class="ratio ratio-16x9">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/-4y3vb0IHgw" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                            </div>
                        </div>

                        <div class="col-12 col-md-4">
                            <h4>Temas</h4>

                            <ul class="list-group">
                                <li class="list-group-item">1. <a href="curso.php">HTML</a></li>
                                <li class="list-group-item">2. <a href="curso_html_2.php">Etiquetas multimedias</a></li>
                                <li class="list-group-item">3. <a href="curso_html_3.php">Formularios</a></li>
                                <li class="list-group-item">4. <a href="curso_html_4.php">Accesibilidad</a></li>
                            </ul>

                            <br>

                            <h4>Recursos</h4>

                            <ul class="list-group">
                                <li class="list-group-item">1. <a href="https://getbootstrap.com/"> embellecimiento de
                                        la pagina </a> </li>
                                <li class="list-group-item">2. <a
                                        href="https://carontestudio.com/blog/listado-de-etiquetas-html/"> listado de
                                        etiquetas html</a> </li>
                            </ul>

                            <br>
                            <h4>Foro</h4>

                            <textarea class="form-control" rows="6" placeholder="ingrese un comentario"></textarea>

                            <div class="card mb-3 mt-4">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="imagenes/foto_perfil.png" class="img-fluid rounded-start" alt="...">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">Julian Salazar ⭐⭐⭐⭐⭐</h5>
                                            <p class="card-text">Excelente video, tengo 40 años y estoy decidido a
                                                aprender a programar, es el mejor tutorial que he encontrado para
                                                principiantes como yo, fácil de entender muy bien explicado.</p>
                                            <p class="card-text">
                                                <small class="text-muted">Agregado hace 2 días</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="card mb-3 mt-1">
                                <div class="row g-0">
                                    <div class="col-md-4">
                                        <img src="imagenes/foto_perfil_2.png" class="img-fluid rounded-start" alt="...">
                                    </div>

                                    <div class="col-md-8">
                                        <div class="card-body">
                                            <h5 class="card-title">julio poveda ⭐⭐⭐</h5>
                                            <p class="card-text">excelente tutorial, eres muy bueno explicando!!! -
                                                solo una pequeña sugerencia: deberías de poner el tema de "forms and
                                                validations"</p>
                                            <p class="card-text">
                                                <small class="text-muted">Agregado hace 4 días</small>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="javascript/bootstrap.js"></script>
</body>

</html>