<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Iniciar sesión | Tecno WEB</title>

  <link rel="icon" type="image/png" href="imagenes/icono.png" />
  <link href="estilos/bootstrap.css" rel="stylesheet">
  <style>
    .formulario-iniciarsesion {
      max-width: 390px;
      padding: 15px;
    }

    .formulario-iniciarsesion .form-floating:focus-within {
      z-index: 2;
    }

    .formulario-iniciarsesion input[type="email"] {
      margin-bottom: -1px;
      border-bottom-right-radius: 0;
      border-bottom-left-radius: 0;
    }

    .formulario-iniciarsesion input[type="password"] {
      margin-bottom: 10px;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-dark bg-primary">
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

  <main class="formulario-iniciarsesion mt-5 w-100 m-auto">
    <form method="POST" action="login_cuenta.php">
      <h1 class="h3 mb-3 fw-normal">Iniciar sesión</h1>

      <?php
        if(isset($_GET['usuario'])) {
          echo '<div class="alert alert-success">Su cuenta ha sido creada, ya puedes iniciar sesión 🎉</div>';
        }
      ?>

      <?php
        if(isset($_GET['error'])) {
          echo '<div class="alert alert-danger">Se han encontrado errores, las credenciales no son correctas</div>';
        }
      ?>

      <div class="form-floating">
        <input name="email" type="email" class="form-control">
        <label>correo electronico</label>
      </div>

      <div class="form-floating">
        <input name="password" type="password" class="form-control">
        <label>contraseña</label>
      </div>
  
      <button class="w-100 btn btn-lg btn-primary" type="submit">
        iniciar sesion
      </button>

      <p class="mt-4 text-center">
        ¿No tienes cuenta?, puedes <a href="/registro.php">registrarte aquí</a>
      </p>
    </form>
  </main>

  <script src="javascript/bootstrap.js"></script>
</body>

</html>