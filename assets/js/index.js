function makeLogin(e) {
  e.preventDefault();

  const { usuario, clave } = e.target;

  fetch("http://localhost/BOYZ/scripts/login.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      usuario: usuario.value,
      clave: clave.value,
    }),
  })
    .then(() => (location.href = "http://localhost/BOYZ/home.php"))
    .catch((err) => {
      console.error(err);
    });
}
