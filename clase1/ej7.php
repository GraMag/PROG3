<?php
/*Generar una aplicación que permita cargar los primeros 10 números impares en un Array.
Luego imprimir (utilizando la estructura for) cada uno en una línea distinta (recordar que el
salto de línea en HTML es la etiqueta <br/>). Repetir la impresión de los números
utilizando las estructuras while y foreach.*/

$numeros = array();
$index = 0;

for ($i = 0; $index < 10; $i++) { 
    if($i % 2 == 1){
        $numeros[$index] = $i;
        $index++;
    }
}


echo("For: <br/>");
for ($i=0; $i < count($numeros); $i++) { 
    echo($numeros[$i] . "<br/>");
}

$index = 0;
echo("<br/>While: <br/>");
while ($index != 10) {
    echo($numeros[$index] . "<br/>");
    $index++;
}

echo("<br/>Foreach: <br/>");
foreach ($numeros as $numero) {
    echo($numero . "<br/>");
}

?>