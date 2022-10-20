<?php
    session_start();
    $email = $_POST['email'];
    $pass = $_POST['password'];

    include_once 'conexion.php';

    $query = $db->prepare("SELECT * FROM usuarios WHERE email=:email");
    $query->bindParam("email", $email, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if (!$result || $result['password'] != $pass) {
        header('Location: login.php?error=credenciales');
    } else {
        $_SESSION['tecnoweb'] = array('id' => $result['id'], 'email' => $result['email'], 'fecha' => time());
        header('Location: index.php');
    }
?>