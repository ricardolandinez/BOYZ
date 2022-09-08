<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/styles.css">
    <title>Registrarme</title>
</head>

<body>
    <div class="form-wrapper">
        <form id="form-register">
            <h1>Registrarme</h1>
            <hr>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="text" name="nombre" placeholder="Nombre" required>
            <input type="password" name="clave" placeholder="Clave" required>
            <input type="password" name="clave2" placeholder="Repetir Clave" required>
            <div class="spacer"></div>
            <button>Registrarme</button>
            <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión</a></p>
        </form>
    </div>
    <script src="assets/js/register.js" type="module"></script>
</body>

</html>