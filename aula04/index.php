<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Herança</title>
</head>
<body>
    <h2>Herança</h2>
    <?php
    require_once 'pessoa.php';

    $p1 = new Pessoa();
    $p1->setNome('João');
    $p1->setCidade('Santa Luzia');    

    echo "<pre>";
        print_r($p1); 
    echo "</pre>";
    echo "<br>";
    $p1->Tarefa('Trabalhar');
    echo "<br>";
    $p2 = new Filho();
    $p2->Tarefa('Estudar');
    $p2->Brincar();

    
    ?>
</body>
</html>