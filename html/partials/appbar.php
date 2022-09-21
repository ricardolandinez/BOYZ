<div class="appbar">
    <h2>Bienvenido, <?php echo $_SESSION['user']['nombre']; ?></h2>
    <div class="menu">
        <a href="home.php">Home</a>
        <a href="sipnosis.php">Sipnosis</a>
        <a href="personajes.php">Personajes</a>
        <?php if ($_SESSION["user"]["admin"] == 1) : ?>
            <a href="admin.php">Administrador</a>
        <?php endif ?>
        <a href="scripts/logout.php">Salir</a>
    </div>
</div>