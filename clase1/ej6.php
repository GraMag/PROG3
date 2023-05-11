<?php
/**
* Definir un Array de 5 elementos enteros y asignar a cada uno de ellos un número (utilizar la
* función rand). Mediante una estructura condicional, determinar si el promedio de los números
* son mayores, menores o iguales que 6. Mostrar un mensaje por pantalla informando el
* resultado.
*/

$numeros = array(rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10), rand(1, 10));
$total = 0;

foreach ($numeros as $num) {
    echo($num . "<br/>");
    $total += $num;
}

echo("<br/>");
echo("El promedio de los numeros es " . ($total / count($numeros)));

?>