<?php

$num;

do{
    echo "Ingrese operador ";
    fscanf(STDIN, "%d", $num);
}while ($num <= 20 && $num <=60);


if($num == 60){
    echo("Sesenta");
} else if($num >= 50){
    echo("Cincuenta");
} else {
    echo("Cuarenta");
}

switch ($num % 10) {
    case 1:
        echo(" y uno");
        break;
    case 2:
        echo(" y dos");
        break;
    case 3:
        echo(" y tres");
        break;
    case 4:
        echo(" y cuatro");
        break;
    case 5:
        echo(" y cinco");
        break;
    case 6:
        echo(" y seis");
        break;
    case 7:
        echo(" y siete");
        break;
    case 8:
        echo(" y ocho");
        break;
    case 9:
        echo(" y nueve");
    default:
        break;
}

?>