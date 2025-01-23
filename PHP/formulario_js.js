//Formulario usando JS - Implementar clase persona: Nombre, DNI, Edad. Enviar por método GET
function Personas(nombre, DNI, edad){
    this.nombre = nombre;
    this.DNI = DNI;
    this.edad = edad;
}

//var persona1 = new Personas("Sabrina", "18555063J", 22);
//document.write("Nombre: " + persona1.nombre + "<br>" + "DNI: " + persona1.DNI + "<br>" + "Edad: " + persona1.edad + "<br>");

document.getElementById("formulario").addEventListener("submit", function(event){
    event.preventDefault();

    var nombre = document.getElementById("nombre").value;
    var DNI = document.getElementById("DNI").value;
    var edad = document.getElementById("edad").value;

    var persona = new Personas(nombre, DNI, edad);

    /*document.getElementById("resultado").innerHTML =
        "<p><strong>Nombre:</strong> " + persona.nombre + "</p>" +
        "<p><strong>DNI:</strong> " + persona.DNI + "</p>" +
        "<p><strong>Edad:</strong> " + persona.edad + "</p>";*/

    const url = new URL('formulario.php', window.location.href);
    url.searchParams.append('nombre', persona.nom);
    url.searchParams.append('edad', persona.edat);
    url.searchParams.append('DNI', persona.dni);

    window.location.href = url;
});