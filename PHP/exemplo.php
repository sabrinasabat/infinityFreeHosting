<?php

// 1. Usando a função date()
echo "<h2>1. Função date()</h2>";
echo "Data atual (dia/mês/ano): " . date("d/m/Y") . "<br>";
echo "Hora atual (horas:minutos:segundos): " . date("H:i:s") . "<br>";
echo "Data e hora atual: " . date("d/m/Y H:i:s") . "<br>";
echo "Data específica (01-10-2023): " . date("d-m-Y", strtotime("2023-10-01")) . "<br>";

// Separador
echo "<hr>";

// 2. Ordenar Arrays
echo "<h2>2. Ordenar Arrays</h2>";

// Ordenar sem função (Bubble Sort)
$numeros = [5, 2, 9, 1, 7];
echo "Array original: ";
print_r($numeros);

for ($i = 0; $i < count($numeros); $i++) {
    for ($j = 0; $j < count($numeros) - $i - 1; $j++) {
        if ($numeros[$j] > $numeros[$j + 1]) {
            $temp = $numeros[$j];
            $numeros[$j] = $numeros[$j + 1];
            $numeros[$j + 1] = $temp;
        }
    }
}
echo "<br>Array ordenado manualmente: ";
print_r($numeros);

// Ordenar com funções nativas
$numeros = [5, 2, 9, 1, 7];
sort($numeros);
echo "<br>Array ordenado com sort(): ";
print_r($numeros);

rsort($numeros);
echo "<br>Array ordenado com rsort(): ";
print_r($numeros);

// Separador
echo "<hr>";

// 3. Usando array_push()
echo "<h2>3. Função array_push()</h2>";
$frutas = ["Manzana", "Banana"];
echo "Array original: ";
print_r($frutas);

array_push($frutas, "Naranja", "Uva");
echo "<br>Array após usar array_push(): ";
print_r($frutas);

// Usando o operador []
$frutas[] = "Melón";
echo "<br>Array após usar []: ";
print_r($frutas);

// Separador
echo "<hr>";

// 4. Usando trim()
echo "<h2>4. Função trim()</h2>";

// Remover espaços em branco
$texto = "   Hola mundo!   ";
echo "Texto original: '$texto'<br>";
$textoLimpio = trim($texto);
echo "Texto após trim(): '$textoLimpio'<br>";

// Remover caracteres específicos
$texto = "###Hola mundo###";
echo "Texto original: '$texto'<br>";
$textoLimpio = trim($texto, "#");
echo "Texto após remover '#': '$textoLimpio'<br>";

// Usando ltrim() e rtrim()
$texto = "   Hola mundo!   ";
echo "Texto após ltrim(): '" . ltrim($texto) . "'<br>";
echo "Texto após rtrim(): '" . rtrim($texto) . "'<br>";


