<?php
session_start();
$user = $_SESSION["user"];

if (!isset($user) || !isset($user["admin"])) {
    header("Location: home.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin page</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
</head>

<body>
<?php include "./partials/appbar.php"; ?>
    <div class="admin-wrapper">
        <h1>Administrador</h1>

        <div class="card" style="width: 50rem;">
            <div class="card-body">
                <h3 class="card-title">Crear personaje</h3>
                <form id="form-create-personaje" class="row g-3">
                    <div class="mb-3 col-md-4">
                        <label for="nombre-personaje" class="form-label"><strong>Nombre del personaje</strong> </label>
                        <input type="text" class="form-control" id="nombre-personaje" name="personaje" placeholder="Nombre del personaje" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="nombre-actor" class="form-label"><strong>Nombre del actor</strong></label>
                        <input type="text" class="form-control" id="nombre-actor" name="nombre" placeholder="Nombre del actor" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="nombre-apellido" class="form-label"><strong>Apellido del actor</strong></label>
                        <input type="text" class="form-control" id="nombre-apellido" name="apellido" placeholder="Apellido del actor" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="nombre-edad" class="form-label"><strong>Edad del actor</strong></label>
                        <input type="number" class="form-control" id="nombre-edad" name="edad" placeholder="Edad del actor" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="nombre-rol" class="form-label"><strong>Rol</strong></label>
                        <select name="rol" id="nombre-rol" class="form-control" required>
                            <option value="">Seleccione rol</option>
                            <option value="protagonista">Protagonista</option>
                            <option value="antagonista">Antagonista</option>
                            <option value="secundario">Secundario</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="nombre-temporada" class="form-label"><strong>Temporadas presente</strong></label>
                        <input type="text" class="form-control" name="temporadas" id="nombre-temporada" placeholder="Temporadas presente" required>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="nombre-genero" class="form-label"><strong>Genero del actor</strong></label>
                        <select name="genero" id="nombre-genero" class="form-control"  required>
                            <option value="" selected>Seleccione</option>
                            <option value="Masculino" required>Masculino</option>
                            <option value="Femenino" required>Femenino</option>
                        </select>
                    </div>
                    <div class="mb-3 col-md-4">
                        <label for="nombre-imagen" class="form-label"><strong>Imagen</strong></label>
                        <input type="text" class="form-control" id="nombre-imagen" name="imagen" placeholder="Imagen" required>
                    </div>
                    <div>
                        <button type="submit" class="btn btn-primary">Crear</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/manage_personajes.js" type="module"></script>
</body>

</html>