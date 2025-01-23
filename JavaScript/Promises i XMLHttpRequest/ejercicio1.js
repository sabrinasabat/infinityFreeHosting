/*Escriu una funció que faci una sol·licitud GET a una URL específica
*(per exemple, https://jsonplaceholder.typicode.com/posts/1) utilitzant XMLHttpRequest i Promises.
*/

let url = "https://jsonplaceholder.typicode.com/posts/1";
let xhr = new XMLHttpRequest();

xhr.open("GET", url, true); // asíncrona

