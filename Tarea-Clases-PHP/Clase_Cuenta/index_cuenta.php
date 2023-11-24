<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cuenta Bancaria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <section class="container">
        <h1 class="text-center">Cuenta Bancaria</h1><br>
        <form action="" method="POST">
            <label class="form-label">Nombre Completo:</label>
            <input type="text" class="form-control" name="nombre" placeholder="Ingrese aquí su nombre completo"><br>
            <label class="form-label">Cantidad ingresada:</label>
            <input type="text" class="form-control" name="cantidad" placeholder="Ingrese aquí la cantidad a depositar"><br>
            <label class="form-label">Valor a retirar:</label>
            <input type="text" class="form-control" name="valor" placeholder="Ingrese aquí el valor a retirar"><br>
            <label class="form-label">Tipo de Cuenta:</label>
            <select name="tipo-cuenta" class="form-control">
                <option value="Corriente">Corriente</option>
                <option value="Con-Chequera">Con Chequera</option>
                <option value="Nómina">Nómina</option>
                <option value="Dólares">Dólares</option>
            </select><br>
            <label class="form-label">Número de Cuenta:</label>
            <input type="text" class="form-control" name="numero-cuenta" placeholder="Ingrese aquí el número de su cuenta"><br>
            <input type="submit" class="btn btn-success" value="Enviar Datos">
        </form>
    </section>
    <?php

    require "./Cuenta.php";

    $nombre = @$_POST['nombre'];
    $cantidad = @$_POST['cantidad'];
    $valor = @$_POST['valor'];
    $tipo_cuenta = @$_POST['tipo-cuenta'];
    $numero_cuenta = @$_POST['numero-cuenta'];

    $cuenta = new Cuenta($nombre, $cantidad, $valor, $tipo_cuenta, $numero_cuenta);

    echo $cuenta->Depositar();
    echo $cuenta->Retirar();
    echo $cuenta->ImprimirDatos();
    ?>
</body>
</html>