import request from "./requests.js";


const form = document.querySelector("#form-personajes")

form.addEventListener("submit", (e) => {
    e.preventDefault();
    const { personaje } = e.target
    request("../../scripts/get_personaje_info.php", "POST", { personaje: personajes.value })
        .then(data => {
            const { imagen, nombre, apellido, edad, genero, temporada, rol } = data;

            const actoresContainer = document.querySelector("#info_actores");
            actoresContainer.innerHTML = "";

            const img = document.createElement("img")
            img.src = "assets/img/actores/" + imagen;
            actoresContainer.appendChild(img);

            const divContainer = document.createElement("div");

            const nombreElement = document.createElement("h1");
            nombreElement.innerHTML = `Nombre: ${nombre} - Apellido: ${apellido} - Edad: (${edad} años) - Genero: ${genero}`;
            divContainer.appendChild(nombreElement);

            const temporadaElement = document.createElement("span");
            temporadaElement.innerHTML = `Temporada: ${temporada} - Rol: ${rol}`;
            divContainer.appendChild(temporadaElement);

            actoresContainer.appendChild(divContainer);

        })
        .catch(err => alert(err.error))
})



const getPersonajes = () => {

    const select = document.querySelector("#personajes");
    select.innerHTML = "";

    request("../../scripts/create_get_character.php", "GET")
        .then(data => {
            
            const option = document.createElement("option");
            option.value = "";
            option.innerHTML = "Seleccione un personaje";
            select.appendChild(option);

            data.map(({personaje, nombre}) => {
                const option = document.createElement("option");
                option.value = personaje;
                option.innerHTML = personaje;
                select.appendChild(option);
            })
        })
        .catch(err => alert(err))
}

(() => {
    getPersonajes();
})()