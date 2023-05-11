<?php
#Aplicación No 4 (Calculadora)
/*Escribir un programa que use la variable $operador que pueda almacenar los símbolos
matemáticos: ‘+’, ‘-’, ‘/’ y ‘*’; y definir dos variables enteras $op1 y $op2. De acuerdo al
símbolo que tenga la variable $operador, deberá realizarse la operación indicada y mostrarse el
resultado por pantalla.*/

$op1;
$op2;
$operador;

echo "Ingrese operador ";
fscanf(STDIN, "%d", $op1);
if(is_nan($op1)){
    $op1 = 0;
}

do {
    echo "Ingrese operacion ";
    fscanf(STDIN, "%s", $operador);
} while(!($operador == "+" || $operador == "-" || $operador == "/" || $operador == "*"));

echo "Ingrese operador ";
fscanf(STDIN, "%d", $op2);

if(is_nan($op2)){
    $op2 = 0;
}

switch($operador){
    case '+':
        echo $op1, " + ", $op2, " = ", ($op1 + $op2);
        break;
    case '-':
        echo $op1, " - ", $op2, " = ", ($op1 - $op2);
        break;
    case '*':
        echo $op1, " * ", $op2, " = ", ($op1 * $op2);
        break;
    default:
        if($op2 == 0){
            echo "No se puede dividir por 0";
        } else {
            echo $op1, " / ", $op2, " = ", ($op1 / $op2), "</br>";
        }
        break;
}
?>