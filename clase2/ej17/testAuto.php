<?php

include_once "auto.php";

$auto1 = new Auto("Ferrari", "Rojo");
$auto2 = new Auto("Ferrari", "Amarillo");
$auto3 = new Auto("Ford", "Gris", 100000);
$auto4 = new Auto("Ford", "Gris", 200000);
$auto5 = new Auto("Ferrari", "Amarillo", 5000000, date("05/05/2023"));

$autos = array($auto1, $auto2, $auto3, $auto4, $auto5);

$auto3->AgregarImpuestos(1500);
$auto4->AgregarImpuestos(1500);
$auto5->AgregarImpuestos(1500);

Auto::Add($auto1, $auto2);



if($auto2->Equals($auto5)){
    echo("Los autos son iguales<br>");
} 


for ($i=0; $i < count($autos); $i++) { 
    if($i % 2 == 0){
        echo(Auto::MostrarAuto($autos[$i]));
    }
}
?>