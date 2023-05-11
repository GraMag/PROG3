<?php
include_once "garage.php";
include_once "../ej17/auto.php";

$auto1 = new Auto("Ferrari", "Rojo");
$auto2 = new Auto("Ferrari", "Amarillo");
$auto3 = new Auto("Ford", "Gris", 100000);
$auto4 = new Auto("Fiat", "Gris", 200000);
$auto5 = new Auto("Ferrari", "Amarillo", 5000000, date("05/05/2023"));
$garage = new Garage("Ruedita feliz S.R.L.", 800);

echo("<br>Añado un auto<br>");

$garage->Add($auto1);

$garage->MostrarGarage();

echo("<br>Agrego otro autos<br>");
$garage->Add($auto3);

$garage->MostrarGarage();

echo("<br>Repito un auto<br>");
$garage->Add($auto3);

echo("<br>Elimino un auto que no esta<br>");
$garage->Remove($auto4);

$garage->MostrarGarage();

echo("<br>Elimino un auto<br>");
$garage->Remove($auto3);

$garage->MostrarGarage();



?>