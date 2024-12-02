class Persona{
    constructor(nombre, correo, edad){
        this.nombre = nombre;
        this.correo = correo;
        this.edad = edad;
    }

    mayorEdad(){
        if(this.edad>=18){
            console.log(`${this.nombre} es mayor de edad`);
        }else{
            console.log(`${this.nombre} es menor de edad`);
        }
    }
}

let arrayPersonas = [];

function agregarPersonas(nombre, correo, edad){
    const nuevaPersona = new Persona(nombre, correo, edad);
    arrayPersonas.push(nuevaPersona);
}

function ensenarPersonas(){
    for(let i=0; i<arrayPersonas.length; i++){
        console.log(`Nombre: ${arrayPersonas[i].nombre}. Correo: ${arrayPersonas[i].correo}. Edad: ${arrayPersonas[i].edad}.`);
        arrayPersonas[i].mayorEdad();
    }
}

function eliminarPersonas(indice){
    if(indice>=0 && indice<arrayPersonas.length){
        console.log(`Eliminando: ${arrayPersonas[indice].nombre}`);
        arrayPersonas.splice(indice, 1);
    }
}

function actualizarPersonas(indice, nuevoNombre, nuevoCorreo, nuevaEdad){
    if(indice>=0 && indice<arrayPersonas.length){
        arrayPersonas[indice].nombre = nuevoNombre;
        arrayPersonas[indice].correo = nuevoCorreo;
        arrayPersonas[indice].edad = nuevaEdad;

        console.log(`La persona en el indice ${indice} fue alterada`);
    }else{
        console.log("Índice inválido");
    }
}

function ensenarPersonasHTML(){
    var tabla = document.getElementById("tablaPersonas").getElementsByTagName("tbody")[0];
    tabla.innerHTML = ""; //Limpiar la tabla antes de llenarla

    for(var i=0; i<arrayPersonas.length; i++){
        var fila = tabla.insertRow();

        //agregar columnas
        fila.insertCell(0).textContent = arrayPersonas[i].nombre;
        fila.insertCell(1).textContent = arrayPersonas[i].correo;
        fila.insertCell(2).textContent = arrayPersonas[i].edad;

        var botonEliminar = document.createElement("button");
        botonEliminar.textContent = "Eliminar";
        botonEliminar.onclick = (function(indice){
            return function (){
                eliminarPersonas(indice); //Llama eliminarPersona con el indice actual
                ensenarPersonasHTML(); //Actualiza la tabla después de eliminar
            };

        })(i);
        fila.insertCell(3).appendChild(botonEliminar);
    }
}

function agregarDesdeFormulario(){
    var nombre = document.getElementById("nombre").value;
    var correo = document.getElementById("correo").value;
    var edad = document.getElementById("edad").value;

    if(nombre&&correo&&edad){
        agregarPersonas(nombre, correo, parseInt(edad));
        ensenarPersonasHTML();

        //Limpiar formulario
        document.getElementById(formPersonas).reset();
    }else{
        alert("Por favor, complete los datos.");
    }
}

ensenarPersonas();
agregarPersonas("Juan", "juan.juan@gmail.com", 35);
agregarPersonas("Rafaela", "rafa_ela@hotmail.com", 19);
agregarPersonas("Victoria", "vic2005@hotmail.com", 16);
eliminarPersonas(1); //He eliminado Rafaela
ensenarPersonas();
actualizarPersonas(0, "Pablo", "pablo.pablito@gmail.com", 20);
ensenarPersonasHTML();

// -----------------------------------------------------------------------------------------------

