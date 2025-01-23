//numero de envio del formulario
// tienes en el formulario.html un evento como ese, así que me hizo acordar de como hacerlo.
document.addEventListener("DOMContentLoaded", () => { //cuando el documento esté cargado, va ejecutar esa funcion
    const formulario = document.getElementById("formulario-compra"); //creo una constante donde guardo el elemento 'formulario-compra' del html.
    const numIntentos = document.getElementById("intentos"); //Lo mismo de arriba pero con los intentos.

    //yo creo una funcion que va contar los intentos
    function contIntentos(){
        const cookies = document.cookie.split(";"); //creo una constante para guardar las cookies y la separo con ; (he intentado separar con , pero no me ha funcionado)
        for(var i=0; i<cookies.length; i++){ //voy recorrendo las cookies
            const cookie = cookies[i].split("="); // creo una constante para guardar las cookies y las separo con = (he intentado separar con , pero no me ha funcionado)
            if(cookie[0] === "intentos"){ //pongo la condicion de que si la cookie en la posicion 0 es igual a intentos
                return cookie[1]; // me tiene que devolver la cookie de la posicion 1
            }
        }
        return 0; // si no existe la cookie, va retornar 0
    }

    //esta funcion es para guardar la cantidad de intentos de las cookies
    function guardarIntentos(intentos){
        document.cookie = `intentos=${intentos}`; //guardamos la cookie con el nombre de intento y el valor que tiene la variable intentos
    }

    //esta funcion es para enseñar los intentos
    function ensenarIntentos(intentos){
        numIntentos.innerHTML = `<i class="fas fa-check-circle icon"></i>Intentos de envío: ${intentos}`; //En el html, (la parte del div que tiene el id intentos), yo cambio el numero de intentos por el que tiene la variable intentos
    }

    //esta funcion es para sumar los intentos
    function sumarIntentos(){
        let intentos = contIntentos(); //creo una variable que guarda la funcion contIntentos
        intentos++; //sumo 1 a esa variable
        guardarIntentos(intentos); //guardo la variable en las cookies
        ensenarIntentos(intentos); //enseño la variable en el html
    }

    const primerIntento = contIntentos(); //creo una variable que guarda la funcion de contar los intentos
    ensenarIntentos(primerIntento); //enseño la variable en el html

    formulario.addEventListener("submit", (e) => { //cuando se envia el formulario, va ejecutar esa funcion (yo puse la letra e porque había visto en las practicas que suele ser el estándar, pero se puede poner otra letra)
        e.preventDefault(); //previno el comportamiento por defecto del formulario, como hicimos varias veces en clase
        sumarIntentos(); //llamo la funcion de sumar los intentos
        document.getElementById("nombre").value = ""; //pongo el campo nombre en blanco y así con el de abajo
        document.getElementById("email").value = "";
        document.getElementById("entradas").value = "";
        document.getElementById("fecha-evento").value = "";
        document.getElementById("telefono").value = "";
        document.getElementById("metodo-pago").value = "";
        document.getElementById("codigo-promocional").value = "";

        const asientosSeleccionados = document.querySelectorAll(".seat.selected"); //creo una constante que guarda todos los asientos seleccionados
        for(let i=0; i<asientosSeleccionados.length; i++){ //recorro todos los asientos seleccionados
            asientosSeleccionados[i].classList.remove("selected"); //remuevo la clase selected de los asientos seleccionados
        }
    })
})

//Nombre en mayúsculas
document.getElementById("nombre").addEventListener("blur", function (){
    this.value = this.value.toUpperCase();
})

//validar que el campo nombre no esté vacío. En caso de error, mostrar un mensaje en el contenedor de errores y devolver el foco al campo
document.getElementById("nombre").addEventListener("blur", function (){
    if(this.value === ""){
        document.getElementById("errores").textContent = "El campo nombre no puede estar vacío";
        this.focus();
    } else {
        document.getElementById("errores").textContent = "";
    }
})

//validar que el email siga el formato correcto utilizando expresion regular. En caso de error, mostrar un mensaje en el contenedor de errores y devolver el foco al campo
document.getElementById("email").addEventListener("blur", function (){ //cuando se sale del campo email (el blur he buscado en internet y es cuando se sale del campo)
    const emailValido = /^[a-zA-Z0-9._-]{1,64}[@]{1}[a-z]{0,129}[\.]{1}[a-z]{2,3}$/ //la validacion del email (se acepta letras minusculas y maiusculas y numeros . _ - , de 1 a 64 caracteres, luego un @, luego de 0 a 129 letras minusculas, luego un punto y luego de 2 a 3 letras minusculas)
    if(!emailValido.test(this.value)){ //si el email no coincide con la validacion
        document.getElementById("errores").textContent = "El email no es válido"; //enseñar el mensaje de error
        this.focus(); //devolver el foco al campo
    } else {
        document.getElementById("errores").textContent = ""; //si no hay error, no enseñar nada
    }
})

//validar que las entradas tenga un numero > 0 y no exceda el máximo de 10 por persona.
//En caso de error, enseñar un mensaje en el contenedor de errores y devolver el foco al campo.
//FALTA PONER::: hay que coincidir con el numero de entradas seleccionadas en el mapa de asientos

document.getElementById("entradas").addEventListener("blur", function(){ //cuando se sale del campo entradas
    if(this.value === "" || this.value <= 0 || this.value >=11){ //si el campo está vacío o es menor o igual a 0 o es mayor a 10
        document.getElementById("errores").textContent = "Las entradas no son válidas"; //enseñar el mensaje de error
        this.focus(); //devolver el foco al campo
    } else {
        document.getElementById("errores").textContent = ""; //si no hay error, no enseñar nada
    }
})

//fecha del evento: dd/mm/aaaa, no puede estar en el pasado. En caso de error, mostrar un mensaje en el contenedor de errores y devolver el foco al campo
//FALTA VALIDAR EL FORMATO DE LA FECHA
document.getElementById("fecha-evento").addEventListener("blur", function (){ //cuando se sale del campo fecha-evento
    const fechaEvento = new Date(this.value); //creo una constante que guarda la fecha del campo fecha-evento
    const hoy = new Date(); //creo una constante que guarda la fecha de hoy
    hoy.setHours(0,0,0,0); //pongo la hora de hoy en 0
    if(hoy<=fechaEvento){ //si la fecha de hoy es menor o igual a la fecha del evento
        document.getElementById("errores").textContent = "La fecha no puede estar en el pasado"; //enseñar el mensaje de error
        this.focus(); //devolver el foco al campo
    } else {
        document.getElementById("errores").textContent = "ERROR"; //si no hay error, no enseñar nada
    }
    }
)

//FALTA VALIDAR: TELÉFONO DE CONTACTO
//FALTA VALIDAR: MÉTODO DE PAGO
//FALTA VALIDAR: CÓDIGO PROMOCIONAL

//confirmacion de envio: antes de enviar el formulario, solicitar confirmacion al usuario.
//si acepta, enviar el formulario. Si cancela, no enviarlo.

document.getElementById("formulario-compra").addEventListener("submit", function (e){ //cuando se envia el formulario
    if(!window.confirm("Seguro que quieres enviar")){ //si no se confirma el envio
        e.preventDefault(); //previene el comportamiento por defecto del formulario
    }
})

//  NO ME HA DADO TIEMPO DE MÁS :(

