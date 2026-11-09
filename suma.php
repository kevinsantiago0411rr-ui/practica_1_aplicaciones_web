<?php
    $numero1 = isset($_POST['numero1']) ? $_POST['numero1'] : 0;
    $numero2 = isset($_POST['numero2']) ? $_POST['numero2'] : 0;
    $operacion = isset($_POST['operacion']) ? $_POST['operacion'] : 'sumar';
    
    $resultado = 0;
    $texto_operacion = "";

    switch ($operacion) {
        case 'sumar':
            $resultado = $numero1 + $numero2;
            $texto_operacion = "suma";
            break;
        case 'restar':
            $resultado = $numero1 - $numero2;
            $texto_operacion = "resta";
            break;
        case 'multiplicar':
            $resultado = $numero1 * $numero2;
            $texto_operacion = "multiplicación";
            break;
        case 'dividir':
            if ($numero2 != 0) {
                $resultado = $numero1 / $numero2;
                $texto_operacion = "división";
            } else {
                $resultado = "Error: No se puede dividir entre cero";
            }
            break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>La <?php echo $texto_operacion; ?> de <?php echo $numero1; ?> y <?php echo $numero2; ?> es: <?php echo $resultado; ?></h1>
</body>
</html>