<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    require_once "Oculos.php";
    $o1 = new Oculos();
    $o1->lente = "Acrilico";
    $o1->grau = "3,5";
    $o1->cor = "preto";
    echo "<pre>";
    print_r($o1);
    echo "</pre>";
    ?>
</body>
</html>