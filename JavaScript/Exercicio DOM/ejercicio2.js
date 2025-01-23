let contador = 0;

const incrementar = document.getElementById('incrementar');
const zerar = document.getElementById('zerar');
const resultado = document.getElementById('resultados');

incrementar.addEventListener("click", function (){
    contador++;
    resultado.textContent = `${contador}`;
})

zerar.addEventListener("click", function (){
    contador = 0;
    resultado.textContent = `Contador: ${contador}`;
})