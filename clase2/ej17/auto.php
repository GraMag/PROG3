<?php

class Auto 
{
    private $_color;
    private $_precio;
    private $_marca;
    private $_fecha;

    public function __construct($marca, $color, $precio = 100000, $fecha = "05-05-2023") {
        $this->_color = $color;
        $this->_marca = $marca;
        $this->_precio = $precio;
        $this->_fecha = $fecha;
    }

    public function AgregarImpuestos($impuesto){
        if(is_numeric($impuesto)){
            $this->_precio += $impuesto; 
        }
    }
    
    public static function MostrarAuto($auto){
        return "Marca: " . $auto->_marca . " Color: " . $auto->_color . " Precio: $" . $auto ->_precio . " Fecha: " . $auto->_fecha . "<br>";
    }
    
    public function Equals($auto){
        return $this->_marca == $auto->_marca;
    }

    public static function Add($auto1, $auto2)
    {
        if($auto1->Equals($auto2) && $auto1->_color == $auto2->_color){
            return $auto1->_precio + $auto2->_precio;
        }
        echo("Los autos son distintos<br>");
        return 0;
    }
}

?>