class Entrada {
    constructor(nombre, correo, fechaInscripcion) {
        this.nombre = nombre;
        this.correo = correo;
        this.fechaInscripcion = fechaInscripcion;
    }
}
    arrayEntradas = [];

    //en la funcion entrada no permito que sea inserido dos emails iguales
    // tampoco permito que se inserte una fecha en el pasado
    // y no se puede enviar el formulario vazio
    function nuevaEntrada(){
        const nombre = document.getElementById("nombre").value;
        const correo = document.getElementById("correo").value;
        const fechaInscripcion = document.getElementById("fechaInscripcion").value;

        for(var i = 0; i<arrayEntradas.length; i++){
            if(arrayEntradas[i].correo === correo){
                var correoRepetido = true;
                window.alert("Este correo ya está registrado. Insira otro.");
            }
        }

        if(nombre&&correo&&fechaInscripcion&&!correoRepetido){
            const hoy = new Date();
            hoy.setHours(0, 0, 0, 0); //he aprendido esta función en la práctica anterior
            const dataInscripcion = new Date(fechaInscripcion);

            if(hoy<=dataInscripcion){
                const nuevaEntrada = new Entrada(nombre, correo, fechaInscripcion);
                arrayEntradas.push(nuevaEntrada);
                window.alert("Entrada añadida con succeso");
            } else {
                window.alert("La fecha no puede estar en el pasado" );
            }
        } else {
            window.alert("Por favor, vuelva a rellenar todos los campos.");
            //he vaciado los campos para que el usuario no tenga que borrarlos manualmente
            document.getElementById("nombre").value = "";
            document.getElementById("correo").value = "";
            document.getElementById("fechaInscripcion").value = "";
        }
        ordenarEntradas();
        tablaActualizada();
        contadorEntradas();
    }

    //elimino todas las entradas
    function eliminarEntradas(){
        arrayEntradas.splice(0, arrayEntradas.length);
        document.getElementById("listadoEntradas").getElementsByTagName("tbody")[0].innerHTML =  "";
        ordenarEntradas();
        tablaActualizada();
        contadorEntradas();
    }

    //actualizo la tabla
    function tablaActualizada(){
        const tabla = document.getElementById("listadoEntradas").getElementsByTagName("tbody")[0];
        tabla.innerHTML = "";

        for(let i=0; i<arrayEntradas.length; i++){
            const entradas = arrayEntradas[i];
            const filas = tabla.insertRow();

            filas.insertCell(0).textContent = entradas.nombre;
            filas.insertCell(1).textContent = entradas.correo;
            filas.insertCell(2).textContent = entradas.fechaInscripcion;

            const botonEliminar = document.createElement("button");
            botonEliminar.textContent = "Eliminar";
            botonEliminar.onclick = function(){
                arrayEntradas.splice(i,1);
                tablaActualizada();
            };
            filas.insertCell(3).appendChild(botonEliminar);
        }
        ordenarEntradas();
        contadorEntradas();
    }

    //actualizo el contador de entradas a cada nueva entrada. Invoco la función en la creación de entradas
    function contadorEntradas(){
        const contador = document.getElementById("contador");
        contador.textContent = `Total de entradas: ${arrayEntradas.length}`;
    }

    //he decidido ordenar las entradas por fecha de inscripción
    //no he utilizado funciones para prácticar la lógica
    function ordenarEntradas(){
        for(var i=0; i<arrayEntradas.length-1; i++){
            for(var j = i+1; j<arrayEntradas.length; j++){
                if(arrayEntradas[i].fechaInscripcion>arrayEntradas[j].fechaInscripcion){
                    var x = arrayEntradas[i];
                    arrayEntradas[i] = arrayEntradas[j];
                    arrayEntradas[j] = x;
                }
            }
        }
    }


