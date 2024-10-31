function confirmClose(){
    alert("Error: 107x.  Un virus ha infestat el seu disc dur, cal eliminar tots els arxius i formatar la unitat C")
    if(confirm("Informi al seu venedor d'aquest error."))
        alert('El navegador es tancarà ja que és impossible comunicar-se amb cap lloc web.');
    else{
        alert('És impossible recuperar el sistema, es començarà a eliminar arxius.');
        parent.close();
    }
}