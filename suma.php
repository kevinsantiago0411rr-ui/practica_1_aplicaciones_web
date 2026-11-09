<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $suma = $numero1 + $numero2;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado de la Suma</title>
    <link rel="stylesheet" href="estilo.css">
</head>
<body>
    <h1>La suma de <?php echo $numero1; ?> y <?php echo $numero2; ?> es: <?php echo $suma; ?></h1>
</body>
</html>