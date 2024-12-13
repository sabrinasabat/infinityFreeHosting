class TareasDiarias{
    constructor(nombreTarea, prioridad, fechaLimite) {
        this.nombreTarea = nombreTarea;
        this.prioridad = prioridad;
        this.fechaLimite = fechaLimite;
    }
}

arrayTareas = [];

function anadirTarea(){

    const nombreTarea = document.getElementById("nombreTarea").value;
    const prioridad = document.getElementById("prioridad").value;
    const fechaLimite = document.getElementById("fechaLimite").value;

    for(let i=0; i<arrayTareas.length; i++){
        if(arrayTareas[i].nombreTarea === nombreTarea){
            var tareaRepetida = true;
            window.alert("Ya existe una tarea con el mismo nombre");
        }
    }

    if(nombreTarea&&prioridad&&fechaLimite&&!tareaRepetida){

        const hoy = new Date();
        hoy.setHours(0,0,0,0);
        const fechaMaxima = new Date(fechaLimite);

        if(hoy<=fechaMaxima){
            const nuevaTarea = new TareasDiarias(nombreTarea, prioridad, fechaLimite);
            arrayTareas.push(nuevaTarea);
            window.alert("Tarea añadida con succeso.");
            listadoTareas();
            contadorTareas();
            ordenarTareas();
        } else {
            window.alert("La tarea no puede estar en el pasado");
            return;
        }
    } else {
        window.alert("Vuelva a rellenar todos los datos");
        document.getElementById("nombreTarea").value="";
        document.getElementById("prioridad").value="";
        document.getElementById("fechaLimite").value="";
    }
    listadoTareas();
    contadorTareas();
    document.getElementById("nombreTarea").value = "";
    document.getElementById("prioridad").value = "";
    document.getElementById("fechaLimite").value;
}

function listadoTareas(){
    const tabla = document.getElementById("ensenarTareas").getElementsByTagName("tbody")[0];
    tabla.innerHTML="";

    for(let i=0; i<arrayTareas.length; i++){
        const tareas = arrayTareas[i];
        const filas = tabla.insertRow();

        filas.insertCell(0).textContent = tareas.nombreTarea;
        filas.insertCell(1).textContent = tareas.prioridad;
        filas.insertCell(2).textContent = tareas.fechaLimite;

        const botonEliminar = document.createElement("button");
        botonEliminar.textContent = "Borrar";
        botonEliminar.onclick = function (){
            arrayTareas.splice(i, 1);
            listadoTareas();
            contadorTareas();
        }
        filas.insertCell(3).appendChild(botonEliminar);
        const editarTarea = document.createElement("button");
        editarTarea.textContent = "Editar";
        editarTarea.onclick = function(){
            editarGuardarTarea(i);
        };
        filas.insertCell(4).appendChild(editarTarea);
    }
    ordenarTareas();
}

function borrarTabla(){
    arrayTareas.splice(0, arrayTareas.length);
    document.getElementById("ensenarTareas").getElementsByTagName("tbody")[0].innerHTML="";
    listadoTareas();
    contadorTareas();
}

function contadorTareas(){
    const contador = document.getElementById("contador");
    contador.textContent = `Total de entradas: ${arrayTareas.length}`;
}

function ordenarTareas(){
    for(var i=0; i<arrayTareas.length-1; i++){
        for(var j=i+1; j<arrayTareas.length; j++){
            if(arrayTareas[i].fechaLimite>arrayTareas[j].fechaLimite){
                var x = arrayTareas[i];
                arrayTareas[i] = arrayTareas[j];
                arrayTareas[j]=x;
            }
        }
    }
}

function editarGuardarTarea(indice) {
    const nombreTareaInput = document.getElementById("nombreTarea");
    const prioridadInput = document.getElementById("prioridad");
    const fechaLimiteInput = document.getElementById("fechaLimite");
    const botonAnadir = document.querySelector("button[onclick='anadirTarea()']");

    // Rellena el formulario con los datos de la tarea seleccionada
    nombreTareaInput.value = arrayTareas[indice].nombreTarea;
    prioridadInput.value = arrayTareas[indice].prioridad;
    fechaLimiteInput.value = arrayTareas[indice].fechaLimite;

    // Cambia el comportamiento del botón para guardar los cambios
    botonAnadir.textContent = "Guardar Cambios";
    botonAnadir.onclick = function () {
        // Actualiza los datos de la tarea seleccionada
        arrayTareas[indice].nombreTarea = nombreTareaInput.value;
        arrayTareas[indice].prioridad = prioridadInput.value;
        arrayTareas[indice].fechaLimite = fechaLimiteInput.value;

        // Restablece el botón a "Añadir Tarea"
        botonAnadir.textContent = "Añadir Tarea";
        botonAnadir.onclick = anadirTarea;

        listadoTareas(); // Actualiza la tabla
        contadorTareas(); // Actualiza el contador

        // Limpia el formulario
        nombreTareaInput.value = "";
        prioridadInput.value = "";
        fechaLimiteInput.value = "";
    };
}


