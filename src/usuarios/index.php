<?php
session_start();
if (isset($_GET['cerrar'])) {
    session_destroy();
    header('location: ../../index.php');
}

if (isset($_SESSION['login'])) {

    if ($_SESSION['login'] !== 'usuario') {
        header('location: ../../index.php');
    }
} else {
    if ($_SESSION['login'] !== 'usuario') {
        header('location: ../../index.php');
    }
}

?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/menu.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/hamburgers/1.2.1/hamburgers.min.css" integrity="sha512-+mlclc5Q/eHs49oIOCxnnENudJWuNqX5AogCiqRBgKnpoplPzETg2fkgBFVC6WYUVxYYljuxPNG8RE7yBy1K+g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.8/css/line.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <title>Menu Principal</title>
</head>

<body>

    <?php
    include('../vista/nav-user.php')
    ?>
    <div class="main">
        <div class="article1">
        </div>
        <div class="content">
            <div class="titulo">
                <h1>Modulos Informativos Aplicativos Presupuestarios</h1>
            </div>
            <div class="card card-ceplan">
                <a href=""><img src="../img/book-icon.svg" alt="">
                    <span>CEPLAN V1.0.1</span></a>

            </div>
            <div class="card card-siga">
                <a href=""><img src="../img/book-icon.svg" alt="">
                    <span>CEPLAN V1.0.1</span></a>

            </div>
            <div class="card card-siaf">
                <a href=""><img src="../img/book-icon.svg" alt="">
                    <span>CEPLAN V1.0.1</span></a>

            </div>
            <div class="card card-tesoreria">
                <a href=""><img src="../img/book-icon.svg" alt="">
                    <span>CEPLAN V1.0.1</span></a>

            </div>
            <div class="card card-siagie">
                <a href=""><img src="../img/book-icon.svg" alt="">
                    <span>CEPLAN V1.0.1</span></a>

            </div>
        </div>
        <div class="article2">
        </div>
    </div>
    <footer>
        <p>©Copyright sistema de uso educativo mas informacion contactar al creador <a href="#">palaciosyostin903@gmail.com</a></p>
    </footer>
    <script src="../js/nav.js"></script>
</body>

</html>