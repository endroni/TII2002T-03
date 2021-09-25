<!DOCTYPE html>
<html lang="pt-bt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ 21 Gabriel - Produto</title>
</head>
<body>
    
    <?php
    
    require_once 'Produto.php';

    $prod = new Produto("Arroz",25,2);

    $prod->DelProd();
    ?>


</body>
</html>