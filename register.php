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
        <form onsubmit="submitForm(event)">
            <h1>Registrarme</h1>
            <hr>
            <input type="text" name="usuario" placeholder="Usuario" required>
            <input type="password" name="clave" placeholder="Clave" required>
            <input type="password" name="clave2" placeholder="Repetir Clave" required>
            <div class="spacer"></div>
            <button>Registrarme</button>
            <p>¿Ya tienes una cuenta? <a href="index.php">Inicia sesión</a></p>
    </div>
    </form>
    <script>
        function submitForm(e) {
            e.preventDefault();

            const {
                usuario,
                clave,
                clave2
            } = e.target;

            if (clave.value !== clave2.value) {
                alert("Las contraseñas no coinciden");
                return;
            }

            fetch("http://localhost/BOYZ/scripts/register.php", {
                    method: "POST",
                    headers: {
                        "Content-Type": "application/json"
                    },
                    body: JSON.stringify({
                        usuario: usuario.value,
                        clave: clave.value
                    })
                })
                .then(res => async () => {
                    try {
                        const data = await res.json();
                        console.log(data);
                    } catch (error) {
                        throw new Error(error);
                    }
                })
                .catch(err => console.error(err));
        }
    </script>
</body>

</html>