function interaccionUsuario() {
    var nombre = window.prompt("Digite tu nombre: ");

    var abandonar = window.confirm(nombre+", deseas abandonar el programa?")

    if(abandonar) {
        window.alert("Fin de programa")
    }
    else {
        window.alert("El programa seguirá.")
    }

    console.log("%cFin de programa", "font-weight: bold; text-decoration: underline; color: blue");
}