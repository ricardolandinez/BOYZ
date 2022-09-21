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
    <title>Sipnosis</title>
    <link rel="stylesheet" href="./assets/css/styles.css">
</head>

<body>
    <?php include "./partials/appbar.php"; ?>
    <div class="sipnosis">
        <h1>Sipnosis</h1>
        <p>En un mundo donde los superhéroes son una realidad, un grupo de jóvenes se embarca en una misión para desenmascarar a un héroe que se ha convertido en un villano. </p>
        <h2>Temporadas</h2>
        <p>Actualmente, la serie cuanta con tres temporadas disponibles. La primera fue estrenada en el 2019 y la segunda en 2020 y una tercera en junio del 2022 </p>
        <h3>Temporada 1</h3>
        <p>"Una interpretación irreverente de lo que sucede cuando los superhéroes, que son tan populares como las celebridades, tan influyentes como los políticos y tan venerados como los dioses, abusan de sus superpoderes en lugar de usarlos para el bien. Son los impotentes contra los superpoderosos mientras The Boys se embarcan en una búsqueda heroica para exponer la verdad sobre " The Seven " y su formidable respaldo Vought ."</p>
        <h3>Temporada 2</h3>
        <p>"En una intensa y desesperada Temporada 2 de The Boys, Butcher, Hughie y el equipo se tambalean por sus pérdidas en la Temporada 1. Huyendo de la ley, tratan de luchar contra los Superhéroes. Vought, la compañía que administra a los héroes, aprovecha el pánico por la amenaza de los Supervillanos y un héroe nuevo, Stormfront, sacude a la compañía y desafía a un Homelander de por sí inestable." </p>
        <h3>Temporada 3</h3>
        <p>Teniendo lugar un año después de los eventos de la temporada anterior, la historia sigue al grupo The Boys que ahora trabajan para la Oficina de Asuntos de Superhéroes de Victoria Neuman para detener a los Súpers problemáticos, después de haber estado en paz con los Siete.</p>
        <h3>Recepcion</h3>
        <p>En Rotten Tomatoes, la primera temporada tiene un índice de aprobación del 84% basado en 101 revisiones, con una calificación promedio de 7.65 / 10. El consenso crítico del sitio web dice: "Aunque el kilometraje de los espectadores puede variar, los placeres violentos y la voluntad de The Boys de participar en temas importantes y relevantes seguramente complacerán a aquellos que buscan un nuevo grupo de antihéroes a los que apoyar".​ En Metacritic, tiene un puntaje promedio ponderado de 74 sobre 100, basado en reseñas de 19 críticos, lo que indica "reseñas generalmente favorables". Ademas, The Boys, ha ganado multiples premios, entre ellos la "Mejor serie de superhéroes" en los Critics' Choice Super Awards y la "Mejor serie de televisión — comedia o musical" en los Satellite Awards.</p>
        <h3>Multimedia Trailers</h3>
        <p>
        <ul>
            <li><a href="https://www.youtube.com/watch?v=eshJeoaDmtY" target="_blank">Temporada 1</a></li>
            <li><a href="https://www.youtube.com/watch?v=MN8fFM1ZdWo" target="_blank">Temporada 2</a></li>
            <li><a href="https://www.youtube.com/watch?v=z6NIMKDJpU8" target="_blank">Temporada 3</a></li>
        </ul>
        </p>
        </br>
        <h3>Enlaces</h3>
        <p>Para ver la serie, puedes hacerlo en la plataforma de Amazon Prime Video, en la cual puedes suscribirte por un mes gratis y disfrutar de la serie.</p>
        <ul>
            <li> <a href="https://www.amazon.com/The-Boys-Season-1/dp/B0875THX53" target="_blank">Ver serie</a></li>
        </ul>
    </div>

</body>

</html>