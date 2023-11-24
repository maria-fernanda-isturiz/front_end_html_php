<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Canción</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <section class="container">
        <h1 class="text-center">Canción</h1><br>
            <form action="" method="POST">
                <label class="form-label">Nombre o título de la canción:</label>
                <input type="text" class="form-control" name="titulo-cancion" placeholder="Ingrese aquí el título de la canción"><br>
                <label class="form-label">Género de la canción:</label>
                    <select name="genero-cancion" class="form-control">
                        <option value="Soul">Soul</option>
                        <option value="Rock">Rock</option>
                        <option value="Pop">Pop</option>
                        <option value="Instrumental">Instrumental</option>
                        <option value="Clásica">Clásica</option>
                        <option value="Salsa">Salsa</option>
                        <option value="Merengue">Merengue</option>
                    </select><br>
                <label class="form-label">Cantante, banda o grupo creador de la canción:</label>
                <input type="text" class="form-control" name="autor" placeholder="Ingrese aquí el artista, banda o grupo musical creador de la canción"><br>
                <input type="submit" class="btn btn-success" value="Enviar Datos">
            </form>
    </section>
    <?php

    require "./Cancion.php";

    $titulo = @$_POST['titulo-cancion'];
    $genero_cancion = @$_POST['genero-cancion'];
    $autor = @$_POST['autor'];

    $cancion = new Cancion($_POST['titulo-cancion'], $_POST['genero-cancion']);

        echo $cancion->SeleccionarCancion();
        echo $cancion->ImprimirDatos();    
    ?>
</body>
</html>