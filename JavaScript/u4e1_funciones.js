//Crea un archivo u4e1_funciones.js en el que introduzcas todas las funciones creadas en el que
//introduzcas todas las funciones creadas en el proyecto de la unidad 2(imc, fcm, categoria, horario).

//Crea un html donde incluyas el archivo anterior y cuatro enlaces. Cada uno
// mediante el método con onClick ejecutará una función.

function nombreCompleto(){
    var nombre = window.prompt("Digite su nombre: ");
    var apellido = window.prompt("Digite sus apellidos: ");
    window.alert("Bienvenido, "+nombre+" "+apellido+"!");
}

function edad(){
    var edad = window.prompt("Digite su edad: ");
    if(edad<18){
        window.alert("Eres menor de edad, cuidado con lo que accedes en internet.");
    }else{
        window.alert("Eres mayor de edad, disfruta de tu libertad pero con responsabilidad.");
    }
}

function sinVocales(){
    var texto = window.prompt("Digite un texto: ");
    var sinVocales = texto.replace(/[aeiou]/gi, "");
    window.alert("Su texto sin vocales se quedaría así: "+sinVocales);
}


