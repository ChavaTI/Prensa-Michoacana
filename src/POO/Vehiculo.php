<?php
class Vehiculo{
    // definiendo las caracteristicas
    protected $ruedas;
    private $marca;
    private $motor;
    private $color;
    // definir constructor
    public function __construct($ruedas,$marca,$motor,$color){
        $this->ruedas = $ruedas;
        $this->marca = $marca;
        $this->motor = $motor;
        $this->color = $color;
    }
    // definir funciones
    function arrancar(){
        echo "Estoy arrancando<br>";
    }
   
    function girar($direccion){
        echo "Estoy girando a la $direccion <br>";
    }
   
    function frenar(){
        echo "Estoy frenando <br>";
    }

    function toString(){
        echo "Soy vehiculo ". $this->marca ." con " .$this->ruedas. " ruedas, de color " .$this->color. " y con un motor " .$this->motor."<br>";
    }

    function __getRuedas(){
        return $this->ruedas;
    }

    function __setRuedas($ruedas){
        $this->ruedas = $ruedas;
    }

    function __getMarca(){
        return $this->marca;
    }

    function __setMarca($marca){
        $this->marca = $marca;
    }

    function __getMotor(){
        return $this->motor;
    }

    function __setMotor($motor){
        $this->motor = $motor;
    }
}
?>