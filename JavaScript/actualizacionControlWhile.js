var cont = 0
var letra;
    do {
        letra = window.prompt("Digite una letra:")
        cont = cont+1;
        window.alert(letra !== 's'? "No éxito":"")
    } while (cont <= 10 && letra !== 's');

if(letra==='s'){
    console.log("Éxito")
}



