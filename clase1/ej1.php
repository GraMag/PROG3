<?php
# Aplicación No 1 (Sumar números)
/* Confeccionar un programa que sume todos los números enteros desde 1 mientras la suma no
supere a 1000. Mostrar los números sumados y al finalizar el proceso indicar cuantos números
se sumaron. */

$total = 0;
$suma = 0;

for ($i = 1; ($suma + $i) < 1000 ; $i++) { 
    echo $suma, " + ", $i;
    $suma += $i;
    $total++;
    echo " = ", $suma, "</br>";
}

echo "Se sumaron ", $total, " numeros.";
?>
