
    const nombre = document.getElementById('nombre');
    const boton = document.getElementById('enviar');
    const resultado = document.getElementById('resultado');

    boton.addEventListener("click", function () {
        const nome = nombre.value;
        resultado.textContent = `Hola ${nome}, Bienvenido al JavaScript`;
    });








