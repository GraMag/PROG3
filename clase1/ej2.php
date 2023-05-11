<?php
#Aplicación No 2 (Mostrar fecha y estación)
/*Obtenga la fecha actual del servidor (función date) y luego imprímala dentro de la página con
distintos formatos (seleccione los formatos que más le guste). Además indicar que estación del
año es. Utilizar una estructura selectiva múltiple.*/

echo date("d-m-Y h:i:s"),"</br>";

$dia = date("d");
$mes = date("m");
$anio = date("Y");

echo "Hoy es ", $dia, " de ", $mes, " del ", $anio, ".</br>";
echo "Estamos en ";
switch ($mes) {
    case 3:
        if($dia < 21){
            echo "Verano";
        } else {
            echo "Otoño";
        }
        break;
    case 4:
    case 5:
        echo "Otoño";
        break;
    case 6:
        if($dia < 21){
            echo "Otoño";
        } else {
            echo "Invierno";
        }
        break;
    case 7:
    case 8:
        echo "Invierno";
        break;
    case 9:
        if($dia < 21){
            echo "Invierno";
        } else {
            echo "Primavera";
        }
        break;
    case 10:
    case 11:
        echo "Primavera";
        break;
    case 12:
        if($dia < 21){
            echo "Primavera";
        } else {
            echo "Verano";
        }
        break;
    default:
        echo "Verano";
        break;
}