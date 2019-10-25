<?php
include("Vehiculo.php");

class Camion extends Vehiculo{

    public $num_cajas;

    function __construct($ruedas,$marca,$motor,$color,$num_cajas){
        parent::__construct($ruedas,$marca,$motor,$color);

        $this->num_cajas = $num_cajas;
    }

    function obternerDatosPadre(){
        return parent->marca;
    }

    
}

?>