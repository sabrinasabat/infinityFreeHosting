/*Utilizando expresiones regulares, escribe una función que reciba una cadena de texto y
devuelva si es un palíndromo o no.*/

function palindromo(palabra) {
    var texto = palabra;
    var cadenaInvertida = texto.split('').reverse().join('');
    return texto === cadenaInvertida;
}
console.log(palindromo("anilina"));
console.log(palindromo("teste"));