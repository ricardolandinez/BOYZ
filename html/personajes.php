<?php
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: index.php');
    exit;
}
// require "functions.php";

// $actor1 = new Actor();
// $actor1->asignarNombre("Anthony");
// $actor1->asignarApellido("Stark");
// $actor1->asignarEdad("46");
// $actor1->asignarGenero("Masculino");
// $actor1->asignarTemporada("1,2,3");
// $actor1->asignarPersonaje("Homelander");
// $actor1->asignarRol("Antagonista");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Personajes</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <?php include "./partials/appbar.php"; ?>
    <div class="personajes">
        <form id="form-personajes">
            <h1>Personajes</h1>
            <select name="personaje" id="personajes" required>
            </select>
            <button>Buscar</button>
        </form>
        <div id="info_actores">
            <!--  -->
        </div>
    </div>
    <script src="assets/js/personajes.js" type="module"></script>
</body>

</html>