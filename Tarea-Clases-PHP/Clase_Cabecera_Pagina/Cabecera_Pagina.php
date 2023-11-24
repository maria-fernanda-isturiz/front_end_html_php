<?php
class CabeceraPagina {

    public $color;
    public $estilo;
    public $fuente;
    public $titulo;

    public function __construct($color, $estilo, $fuente, $titulo)
    {
        $this->color = $color;
        $this->estilo = $estilo;
        $this->fuente = $fuente;
        $this->titulo = $titulo;
    }

    public function ObtenerColor(){
        switch($this->color){
            case 'Violeta':
                 "<h1 style='color: #563d7c;'>{$this->titulo}</h1><br>";
                break; 
            case 'Verde':
                 "<h1 style='color: #20d71d;'>{$this->titulo}</h1><br>";
                break;
            case 'Azul':
                 "<h1 style='color: #1d5bd7'>{$this->titulo}</h1><br>";
                break;
            case 'Rojo':
                 "<h1 style='color: #d71d1d;'>{$this->titulo}</h1><br>";
                break;
            case 'Naranja':
                 "<h1 style='color: #d7771d;'>{$this->titulo}</h1><br>";
                break;
            case 'Rosado':
                 "<h1 style='color: #f07fec;'>{$this->titulo}</h1><br>";
                break;
            case 'Negro':
                "<h1 style='color: #000000;'>{$this->titulo}</h1><br>";
                break;
            default:
                echo "<div class='alert alert-danger' role='alert'>
                    Por favor, seleccione un color disponible.
                </div>";
        }
    }

    public function EstiloTitulo(){
        switch($this->estilo){
            case 'Centro':
                "<h2 style='text-align: center;'>{$this->titulo}</h2>";
                break;
            case 'Derecha':
                "<h2 style='text-align: right;'>{$this->titulo}</h2>";
                break;
            case 'Izquierda':
                "<h2 style='text-align: left;'>{$this->titulo}</h2>";
                break;
            default:
                echo "<div class='alert alert-danger' role='alert'>
                    Por favor, seleccione una opción válida.
                </div>";
        }
    }

    public function FuenteTitulo(){
        switch($this->fuente){
            case 'Saira':
                "<h3 style='text-align: center;'>{$this->titulo}</h3>";
                break;
            case 'Arial':
                "<h3 style='text-align: center;'>{$this->titulo}</h3>";
                break;
            case 'Times New Roman':
                "<h3 style='text-align: center;'>{$this->titulo}</h3>";
                break;
            case 'Helvetica':
                "<h3 style='text-align: center;'>{$this->titulo}</h3>";
                break;
            case 'Segoe UI':
                "<h3 style='text-align: center;'>{$this->titulo}</h3>";
                break;
            case 'Roboto':
                "<h3 style='text-align: center;'>{$this->titulo}</h3>";
                break;
            case 'Futura':
                "<h3 style='text-align: center;'>{$this->titulo}</h3>";
                break;
            case 'Century Gothic':
                "<h3 style='text-align: center;'>{$this->titulo}</h3>";
                break;
            default:
                echo "<div class='alert alert-danger' role='alert'>
                    Por favor, seleccione una tipografía o fuente válida.
                </div>";
        }
    }

    public function ImprimirPropiedades(){
        return "<div class='card text-center'>
        <div class='card-header'>
          Título de la página: " . $this->titulo . "
        </div>
        <div class='card-body'>
          <h5 class='card-title'>Color: " . $this->color  . " </h5>
          <h5 class='card-title'>Fuente o tipo de letra: " . $this->fuente . "</h5>
          <h5 class='card-title'>Alineación del texto: " . $this->estilo . "</h5>
        </div>
      </div>";
    }
}


?>