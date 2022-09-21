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
    <?php include "./partials/appbar.php"; ?>
    <div class="home-wrapper">
        <h1>La historia de la serie</h1>
        <p>¿Qué pasa cuando los superhéroes abusan de sus superpoderes en lugar de utilizarlos para hacer el bien? The Boys es la adaptación televisiva de la obra de Garth Ennis que presenta un mundo superheróico donde los héroes están corrompidos por la fama. Esta actitud cegada y de alta celebridad les lleva a poner en peligro al mundo más de una vez. Una batalla entre las personas corrientes y los superhéroes tiene lugar cuando estos últimos deciden desvelar la verdad sobre “Los Siete” y una corporación multinacional todopoderosa que maneja a los superhéroes y oculta todos sus sucios secretos, llamada Vought.Hughie Campbell es un simple vendedor de una tienda de tecnología que vive su día a día junto a su pareja, hasta que un superhéroe de Los Siete, llamado A-Tren, la mata traspasarle literalmente mediante su supervelocidad. Con la meta de vengarse, Hughie se une a Billy Carnicero, un vigilante empeñado en acabar con estos superhéroes corruptos que van por el mundo como si fuese suyo, y lo hace también con la ayuda de Leche Materna y Frenchie. Por otro lado, Luz Estelar se une a Los Siete tras la muerte de uno de ellos, pero su idea de una idílica vida de superheroína que creía en un principio que podría tener cambia radicalmente cuando conoce a Profundo.</p>
    </div>
</body>

</html>