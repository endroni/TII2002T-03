<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 01</title>
</head>
<body>
    <h2>POO Aula 01</h2>
    
    <?php
    require_once 'carro.php';

    $carro1 = new Carro(); // Instanciei uma classe = Criei um objeto
    $carro1->marca = "Chevrole";
    $carro1->modelo = "D20";
    $carro1->cor = "Branco";
    $carro1->ano = 1992;

    echo "<pre>";
        print_r($carro1);
    echo "</pre>";

    ?>
</body>
</html>