<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>
    <section class="container">
        <h1 class="text-center">Calculadora</h1><br>
            <form action="" method="POST">
                <label class="form-label">Ingrese el primer número:</label>
                <input type="number" class="form-control" name="numero-1" placeholder="Ingrese aquí el primer número"><br>
                <label class="form-label">Ingrese el segundo número:</label>
                <input type="number" class="form-control" name="numero-2" placeholder="Ingrese aquí el segundo número"><br>
                <label class="form-label">Operación matemática a realizar:</label>
                    <select name="operacion" class="form-control">
                        <option value="Suma">Suma</option>
                        <option value="Resta">Resta</option>
                        <option value="Multiplicar">Multiplicar</option>
                        <option value="Dividir">Dividir</option>
                        <option value="Potencia">Potencia</option>
                    </select><br>
                <label class="form-label">Ingrese el número para calcular su factorial:</label>
                <input type="number" class="form-control" name="factorial" placeholder="Ingrese aquí el número para calcular su factorial"><br>
                <input type="submit" class="btn btn-success" value="Enviar Datos">
            </form>
    </section>
    <?php

    require "./Calculadora.php";
    
     $n1 = @$_POST['numero-1'];
     $n2 = @$_POST['numero-2'];
     $operacion = @$_POST['operacion'];
     $n = @$_POST['factorial'];

     $calculadora = new Calculadora($n1, $n2, $n);

     switch($operacion){
        case 'Suma':
            echo $calculadora->Sumar();
            break;
        case 'Resta':
            echo $calculadora->Restar();
            break;
        case 'Dividir':
            echo $calculadora->Dividir();
            break;
        case 'Multiplicar':
            echo $calculadora->Multiplicar();
            break;
        case 'Potencia':
            echo $calculadora->Potencia();
            break;
        default:
            echo "<div class='alert alert-danger' role='alert'>
                Por favor, seleccione una operación matemática válida.
            </div>";
    }

     echo $calculadora->NumeroFactorial($factorial);
    ?>
</body>
</html>