import request from "./requests.js";

const formRegister = document.querySelector("#form-register");
formRegister.addEventListener("submit", (e) => {
  e.preventDefault();
  const { usuario, clave, clave2, nombre } = e.target;
  if (clave.value !== clave2.value) {
    alert("Las contraseñas no coinciden");
    return;
  }
  request("../../scripts/register_user.php", "POST", {
    usuario: usuario.value,
    clave: clave.value,
    nombre: nombre.value,
  })
    .then((res) => {
      alert(res);
      location.href = "../../index.php";
    })
    .catch((err) => alert(err.error));
});
