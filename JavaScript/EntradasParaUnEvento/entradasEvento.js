class Entradas{
    constructor(nombre, correo, fechaInscripcion) {
        this.nombre = nombre;
        this.correo = correo;
        this.fechaInscripcion = fechaInscripcion;
    }
}

let arrayEntradas = [];

function adcionarEntradas(){
    const nombre = document.getElementById("nombre").value;
    const correo = document.getElementById("correo").value;
    const fechaInscripcion = document.getElementById("fechaInscripcion").value;

    if(nombre&&correo&&fechaInscripcion){
        const hoy = new Date();
        const dataInscripcion = new Date(fechaInscripcion); // Hay que converter a String
        if(dataInscripcion>=hoy){
            const nuevaEntrada = new Entradas(nombre, correo, fechaInscripcion);
            arrayEntradas.push(nuevaEntrada);
            window.alert("Entrada añadida con succeso.");
        } else{
            window.alert("La fecha no puede estar en el pasado");
        }
    } else{
        window.alert("Hay que inserir todos los datos");
    }
    actualizarTabla();
    totalEntradas();
}

function eliminarEntradas(){
    arrayEntradas.splice(0, arrayEntradas.length);
    document.getElementById("tablaEvento").getElementsByTagName("tbody")[0].innerHTML = "";
    actualizarTabla();
    totalEntradas();
}

//ese sí fue dificil

function actualizarTabla(){
    //Para actualizar la tabla primero tengo que acceder a los elementos
    const tabla = document.getElementById("tablaEvento").getElementsByTagName("tbody")[0];
    tabla.innerHTML=""; //Limpiando la tabla antes de rellenarla

    //Recoger el array de las entradas y agregar filas
    for(var i=0; i<arrayEntradas.length; i++){
        const entradas = arrayEntradas[i];
        const filas = tabla.insertRow();

        //agregar celda con los datos
        filas.insertCell(0).textContent = entradas.nombre;
        filas.insertCell(1).textContent = entradas.correo;
        filas.insertCell(2).textContent = entradas.fechaInscripcion;

        //Botón para eliminar una celda individual
        const botonEliminar = document.createElement("button");
        botonEliminar.textContent = "Eliminar";
        botonEliminar.onclick = (function(i){
            return function(){
                arrayEntradas.splice(i, 1);
                actualizarTabla();
            };
        })(i);
        filas.insertCell(3).appendChild(botonEliminar);
    }
    totalEntradas();
}

function totalEntradas(){
    const cont = document.getElementById("numEntradas");
    cont.textContent = `Total de entradas: ${arrayEntradas.length}`;
}