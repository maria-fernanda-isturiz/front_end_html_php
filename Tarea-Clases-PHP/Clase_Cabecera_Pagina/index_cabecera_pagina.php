<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cabecera de página</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <section class="container">
        <h1 class="text-center">Cabecera de Página</h1><br>
            <form action="" method="POST">
                <label for="">Título:</label><br>
                <input type="text" class="form-control" name="titulo"><br>
                <label class="form-label">Seleccione el color de la fuente o tipografía:</label>
                    <select name="color-fuente" class="form-control">
                        <option value="Violeta">Violeta</option>
                        <option value="Verde">Verde</option>
                        <option value="Azul">Azul</option>
                        <option value="Rojo">Rojo</option>
                        <option value="Naranja">Naranja</option>
                        <option value="Rosado">Rosado</option>
                        <option value="Negro">Negro</option>
                    </select><br>
                <label class="form-label">Seleccione el estilo del texto:</label>
                    <select name="estilo-texto" class="form-control">
                        <option value="Centro">Centro</option>
                        <option value="Derecha">Derecha</option>
                        <option value="Izquierda">Izquierda</option>
                    </select><br>
                <label class="form-label">Seleccione el tipo de fuente o tipografía:</label>
                    <select name="fuente" class="form-control">
                        <option value="Saira">Saira</option>
                        <option value="Arial">Arial</option>
                        <option value="Times-New-Roman">Times New Roman</option>
                        <option value="Helvetica">Helvetica</option>
                        <option value="Segoe UI">Segoe UI</option>
                        <option value="Roboto">Roboto</option>
                        <option value="Futura">Futura</option>
                        <option value="Century-Gothic">Century Gothic</option>
                    </select><br>
                <input type="submit" class="btn btn-success" value="Enviar Datos">
            </form>
    </section>
    <?php

    require "./Cabecera_Pagina.php";

    $color = @$_POST['color-fuente'];
    $estilo = @$_POST['estilo-texto'];
    $fuente = @$_POST['fuente'];
    $titulo = @$_POST['titulo'];

    $cabecera_pagina = new CabeceraPagina($color, $estilo, $fuente, $titulo);

    echo $cabecera_pagina->ObtenerColor();
    echo $cabecera_pagina->EstiloTitulo();
    echo $cabecera_pagina->FuenteTitulo();
    echo $cabecera_pagina->ImprimirPropiedades();

    ?>
</body>
</html>