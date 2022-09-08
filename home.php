<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Home</title>
</head>

<body>
    <div class="home-appbar">
        <h2>Bienvenido, <?php echo $_SESSION['user']['name']; ?></h2>
        <div class="menu">
            <a href="#">Sipnosis</a>
            <a href="#">Personajes</a>
            <a href="scripts/logout.php">Salir</a>
        </div>
    </div>
</body>

</html>