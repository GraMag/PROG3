<?php
include "../ej17/auto.php";
class Garage
{
    private $_razonSocial;
    private $_precioHora;
    private $_autos = array();

    public function __construct($razonSocial, $precioHora = 500)
    {
        $this->_razonSocial = $razonSocial;
        $this->_precioHora = $precioHora;
    }

    public function MostrarGarage()
    {
        echo ("Razon Social: " . $this->_razonSocial . " Precio por hora: " . $this->_precioHora . "<br>");
        foreach ($this->_autos as $auto) {
            echo (Auto::MostrarAuto($auto));
        }

    }

    private function Equals($auto)
    {
        foreach ($this->_autos as $unAuto) {
            if ($unAuto->Equals($auto)) {
                return true;
            }
        }
        return false;
    }

    public function Add($auto)
    {
        if (!$this->Equals($auto)) {
            array_push($this->_autos, $auto);
        } else {
            echo ("El auto ya esta en el garage<br>");
        }
    }

    public function Remove($auto)
    {
        foreach ($this->_autos as $key => $unAuto) {
            if ($unAuto->Equals($auto)) {
                unset($this->_autos[$key]);
            }
        }
        echo ("El auto no esta en el garage<br>");
    }
}

?>