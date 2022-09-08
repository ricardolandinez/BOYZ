import request from "./requests.js";

const formLogin = document.querySelector("#form-login");
formLogin.addEventListener("submit", (e) => {
  e.preventDefault();

  const { usuario, clave } = e.target;

  request("../../scripts/login.php", "POST", {
    usuario: usuario.value,
    clave: clave.value,
  })
    .then((res) => {
      console.log(res);
      location.href = "../../home.php";
    })
    .catch((err) => alert(err.error));
});
