<?php

class Cuenta {

    public $nombre;
    public $cantidad;
    public $valor;
    protected $tipo_cuenta;
    protected $numero_cuenta;

    public function __construct($nombre, $cantidad, $valor, $tipo_cuenta, $numero_cuenta)
    {
        $this->nombre = $nombre;
        $this->cantidad = $cantidad;
        $this->valor = $valor;
        $this->tipo_cuenta = $tipo_cuenta;
        $this->numero_cuenta = $numero_cuenta;
    }

    public function Depositar(){
        if($this->cantidad < 5){
            return "<div class='alert alert-danger' role='alert'>
                El monto a depositar debe ser mayor a $5.00
            </div>";
        } else if ($this->cantidad > 5){
            return "<div class='alert alert-success' role='alert'>
                Su monto se ha depositado correctamente.
            </div>";
        }
    }

    public function Retirar(){

        if($this->valor < 5){
            return "<div class='alert alert-danger' role='alert'>
                Lo sentimos, pero no hay efectivo disponible en la cuenta
            </div>";
        } else if($this->valor >= 5){
            return "<div class='alert alert-success' role='alert'>
                " . $this->cantidad - $this->valor . "
            </div>";
            
            
        }
    }

    public function ImprimirDatos(){
        return "<div class='card text-center'>
        <div class='card-header'>
          <b>Nombre: </br> $this->nombre
        </div>
        <div class='card-body'>
          <h5 class='card-title'>Tipo de Cuenta: $this->tipo_cuenta</h5>
          <h5 class='card-title'>Número de Cuenta: $this->numero_cuenta</h5>
        </div>
      </div>";
    }
}

?>