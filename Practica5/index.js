function validarAgregar() {
    var nombre = document.getElementById("nombre").value;
    var usuario = document.getElementById("usuario").value;
    var avatar = document.querySelector('input[name="checkbox"]:checked').value;
    var cabello = document.querySelector('input[name="radio"]:checked').value;
    var color = document.getElementById("color").value;
    var rango = document.getElementById("rango").value;
    var fecha = document.getElementById("fecha").value;

    personaje = "<thead><tr><th>Nombre</th><th>Usuario</th><th>Avatar</th><th>Cabello</th><th>Color de pelo</th><th>Rango de torzo</th><th>Cumpleaños</th></tr></thead>";

    if (!nombre) {
        alert("Campo vacío");
    } else if (!usuario) {
        alert("Campo vacío");
    } else if (!avatar) {
        alert("Campo vacío");
    } else if (!cabello) {
        alert("Campo vacío");
    } else if (!color) {
        alert("Campo vacío");
    } else if (!rango) {
        alert("Campo vacío");
    } else if (!fecha) {
        alert("Campo vacío");
    } else {

        personaje = personaje + "<tr>";
        personaje = personaje + "<td>" + nombre + "</td>";
        personaje = personaje + "<td>" + usuario + "</td>";
        personaje = personaje + "<td>" + avatar + "</td>";
        personaje = personaje + "<td>" + cabello + "</td>";
        personaje = personaje + "<td>" + color + "</td>";
        personaje = personaje + "<td>" + rango + "</td>";
        personaje = personaje + "<td>" + fecha + "</td>";
        personaje = personaje + "</tr>";

        document.getElementById("content").innerHTML = personaje;
        document.getElementById("dataForm").reset();


    }

}