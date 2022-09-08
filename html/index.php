<?php
session_start();
if (isset($_SESSION['user'])) {
    header('Location: home.php');
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
    <div class="form-wrapper">
        <form id="form-login">
            <h1>Login</h1>
            <hr>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="clave" placeholder="Clave" required>
            <div class="spacer"></div>
            <button>Ingresar</button>
            <p>¿No tienes una cuenta aún? <a href="register.php">Registrate</a></p>
        </form>
    </div>
    <script src="assets/js/login.js" type="module"></script>
</body>

</html>