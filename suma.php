<?php
    $numero1 = $_POST['numero1'];
    $numero2 = $_POST['numero2'];
    $suma = $numero1 + $numero2;
    echo "La suma de $numero1 y $numero2 es: $suma";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>la suma de <?php echo $numero1; ?> y <?php echo $numero2; ?> es: <?php echo $suma; ?></h1>

</body>
</html>