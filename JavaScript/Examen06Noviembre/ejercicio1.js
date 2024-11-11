//Crea una función que reciba una cadena de texto y devuelva una nueva cadena con las palabras en orden inverso.

function inverso(){
    var cadena = "Sabrina Sabat";
// Invertir la cadena
    const cadenaInvertida = cadena.split('').reverse().join('');
    console.log(cadenaInvertida);
}

inverso();