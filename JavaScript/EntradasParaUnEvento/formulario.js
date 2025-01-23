document.addEventListener('DOMContentLoaded', () =>{
    const formulario = document.getElementById("formulario-compra");
    const intentos = document.getElementById("intentos");
    const errores = document.getElementById("errores");
    const email = document.getElementById("email");
    const nombre = document.getElementById("nombre");
    const entradas = document.getElementById("entradas")
    let cont_intentos = 0;

    //función que incrementa las tentativas
    function incrementaIntentos(){
        cont_intentos++;
        document.cookie = `intentos=${cont_intentos}; path=/`;
        intentos.innerHTML =`<i class="fas fa-check-circle icon"></i>Intentos de envío:${cont_intentos}`;
    }

    //función para recuperar los intentos
    function recuperaIntentos(){
        const cookies = document.cookie.split(";");
        for(let cookie of cookies){
            const [nombre, valor] = cookie.split("=");
            if(nombre.trim() === "intentos"){
                cont_intentos = parseInt(valor);
                intentos.innerHTML =`<i class="fas fa-check-circle icon"></i>Intentos de envío:${cont_intentos}`;
                break;
            }
        }
    }

    //Función que exibe los errores
    function muestraErrores(campo, mensaje){
        errores.innerHTML = `<i class="fas fa-check-circle icon"></i>${mensaje}`;
        campo.focus();
    }

    //función para cambiar el nombre
    nombre.addEventListener("blur", () =>{
        nombre.value = nombre.value.toUpperCase();
    });

    //función al enviar el formulario
    formulario.addEventListener("submit", (event) =>{
        event.preventDefault();
        errores.innerHTML = "";

       //Validación campo: nombre del asistente
        if(nombre.value.trim() === ""){
            muestraErrores(nombre, "¡Campo obligatorio!")
            return;
        }

        //Validación campo: email
        const emailRegex = /^[^\s!@#$%¨&*]+@[^\s!@#$%¨&*]+\.[^\s!@#$%¨&*]+$/;
        if(!emailRegex.test(email.value.trim())){
            muestraErrores(email, "Email invalido");
            return;
        }

        //Validación campo: entradas
        if(entradas.value.trim() === "" && entradas>0 && entradas<=10){
            muestraErrores(entradas, "Campo obligatório y debe ser entre 1 y 10");
            return;
        }

        //Validación campo: fecha




        //Confirmación de envío del formulario
        if(confirm('Desea enviar el formulario?')){
            incrementaIntentos();
            formulario.submit();
        }
    })

    recuperaIntentos();


})
