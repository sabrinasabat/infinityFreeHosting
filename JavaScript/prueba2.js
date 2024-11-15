function mediaValores(){
    var array=[5, 7, 2, 9, 50];
    var suma = array.reduce(function(a,b){return a+b});
    var media = suma/array.length;
    console.log(media);
}