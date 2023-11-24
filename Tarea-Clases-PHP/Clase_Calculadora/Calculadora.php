<?php

class Calculadora {

    public $n1;
    public $n2;
    public $n;

    public function __construct($n1, $n2, $n)
    {
        $this->n1 = $n1;
        $this->n2 = $n2;
        $this->n = $n;
    }

    public function Sumar(){
        return "<div class='alert alert-success' role='alert'
            El resultado es: " . $this->n1 + $this->n2 . "
      </div>";
    }

    public function Restar(){
        return "<div class='alert alert-warning' role='alert'>
            El resultado es: " . $this->n1 - $this->n2 . "
        </div>";
    }

    public function Dividir(){
        if($this->n1 === 0 || $this->n2 === 0){
            return "<div class='alert alert-danger' role='alert'>
                Lo sentimos, pero la operación es inválida y el 
                resultado es 0.
            </div>";
        } else 
            return "<div class='alert alert-info' role='alert'>
                El resultado es: " . $this->n1 / $this->n2 . "
            </div>";  
    }

    public function Multiplicar(){
        if($this->n1 === 0 || $this->n2 === 0){
            return "<div class='alert alert-danger' role='alert'>
                Lo sentimos, pero la operación es inválida y el 
                resultado es 0.
            </div>";
        } else 
            return "<div class='alert alert-light' role='alert'>
                El resultado es: " . $this->n1 * $this->n2 . "
            </div>";
    }

    public function Potencia(){
        if($this->n1 === 0){
            return "<div class='alert alert-danger' role='alert'>
                Lo sentimos, pero la operación es inválida y el 
                resultado es: " . $this->n1 ** $this->n2 . "
            </div>";
        } else if($this->n2 === 0){
            return "<div class='alert alert-warning' role='alert'>
                El resultado es: " . $this->n1 ** $this->n2 . "
            </div>";
        } else 
            return "<div class='alert alert-success' role='alert'>
                El resultado es: " . $this->n1 ** $this->n2 . "
            </div>";
    }

    public function NumeroFactorial($factorial){
        $factorial = $this->n - 1; 

        if ($factorial === 1) return "<div class='alert alert-danger' role='alert'>
            El factorial de " . $factorial . " es 1
        </div>";

        if($factorial === 0) return "<div class='alert alert-danger' role='alert'>
            El factorial de " . $factorial . " es 0
        </div>";

        if($factorial !== 1 && $factorial !== 0){
            return "<div class='alert alert-success' role='alert'>
                El factorial es " . $this->n * $factorial . " 
            </div>";
        }
    }
}
?>