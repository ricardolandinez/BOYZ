import request from "./requests.js";

const form = document.querySelector("#form-create-personaje");


form.addEventListener("submit", e => {
    e.preventDefault();
    const { nombre, apellido, edad, genero, temporadas, personaje, rol, imagen } = e.target;
    request("../../scripts/create_get_character.php", "POST", {
        nombre: nombre.value,
        apellido: apellido.value,
        edad: edad.value,
        genero: genero.value,
        temporada: temporadas.value,
        personaje: personaje.value,
        rol: rol.value,
        imagen: imagen.value
    })
    .then(res => {
        alert(res);
        form.reset();
    })
    .catch(err => alert(err.error));
});