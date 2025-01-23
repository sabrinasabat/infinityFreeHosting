const nombre = document.getElementById('nombre');
const boton = document.getElementById('enviar');
const respuesta = document.getElementById('respuesta');

boton.addEventListener("click", function (){
    const mensaje = nombre.value;

    if(mensaje){
        respuesta.textContent = `Hola ${mensaje}, bienvenido(a) al JavaScript`;
    } else {
        respuesta.textContent = `Por favor, digite un nombre válido.`;
    }

})