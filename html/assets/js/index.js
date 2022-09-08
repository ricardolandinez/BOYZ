function makeLogin(e) {
  e.preventDefault();

  const { usuario, clave } = e.target;

  fetch("../../scripts/login.php", {
    method: "POST",
    credentials: "same-origin",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      usuario: usuario.value,
      clave: clave.value,
    }),
  })
    .then(async (res) => {
      const data = await res.json();
      if (res.status !== 200) {
        throw data;
      }
      location.href = "../../home.php";
    })
    .catch((err) => {
      alert(err.error);
    });
}

const registerUser = (e) => {
  e.preventDefault();

  const { usuario, clave, clave2, nombre } = e.target;

  if (clave.value !== clave2.value) {
    alert("Las contraseñas no coinciden");
    return;
  }

  fetch("../../scripts/register_user.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/json",
    },
    body: JSON.stringify({
      usuario: usuario.value,
      clave: clave.value,
      nombre: nombre.value,
    }),
  })
    .then((res) => async () => {
      if (res.status !== 200) {
        throw await res.json();
      }
      location.href = "../../index.php";
    })
    .catch((err) => console.error(err));
};
