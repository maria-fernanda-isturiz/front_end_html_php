<?php
class Cancion {
    public $titulo;
    public $genero_cancion;
    private $autor;

    public function __construct($titulo, $genero_cancion)
    {
        $this->titulo = $titulo;
        $this->genero_cancion = $genero_cancion;
    }

    public function getAutor(){
        return "Autor: " . $this->autor;
    }

    public function setAutor($autor){
        $this->autor = $autor; 
    }

  public function SeleccionarCancion(){
    switch($this->genero_cancion){ 
      case 'Soul':
          echo "<div class='alert alert-primary' role='alert'>
              El género de la canción es Soul.
          </div>";
          break;
      case 'Rock':
          echo "<div class='alert alert-secondary' role='alert'>
              Esta es una canción de Rock.
          </div>";
          break;
      case 'Pop':
          echo "<div class='alert alert-warning' role='alert'>
             Esto es música Pop.
          </div>";
          break;
      case 'Instrumental':
          echo "<div class='alert alert-success' role='alert'>
              Estás escuchando música Instrumental.
          </div>";
          break;
      case 'Clásica':
          echo "<div class='alert alert-primary' role='alert'>
              Esto es música Clásica.
          </div>";
          break;
	  case 'Salsa':
		  echo "<div class='alert alert-secondary' role='alert'>
			  La canción pertenece al género de la Salsa.
		  </div>";
		  break;
	  case 'Merengue':
		  echo "<div class='alert alert-warning' role='alert'>
			   Estás escuchando Merengue.
		  </div>";
		  break;
      default: 
          echo 'Ingrese un género musical válido';
  	}
  }

    public function ImprimirDatos(){
        return "<div class='card text-center'>
        <div class='card-header'>
          <h5><b>Canción:</b></h5> $this->titulo
        </div>
        <div class='card-body'>
          <h5 class='card-title'><b>Título: $this->titulo</b></h5>
          <h5 class='card-title'><b>Género: $this->genero_cancion</b></h5>
        </div>
      </div>";
    }
}


?>