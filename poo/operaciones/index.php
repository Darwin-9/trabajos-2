<?php

    include("libreria/operaciones.php");

    $operaciones = new Operaciones();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

    echo "suma: ". $operaciones->sumar(1,2). "<br>";
    echo "Resta ". $operaciones->restar(1,2). "<br>";
    echo "Multiplicacion ". $operaciones->multiplicar(1,2). "<br>";
    echo "division ". $operaciones->dividir(1,2). "<br>";
?>
</body>
</html>