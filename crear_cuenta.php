<?php
    $email = $_POST['email'];
    $pass = $_POST['password'];

    include_once 'conexion.php';

    $insert = $db->prepare("INSERT INTO usuarios(email, password) VALUES ('$email', '$pass')");
    $insert->execute();

    echo 'Guardado';
    header('Location: login.php?usuario=guardado');
?>