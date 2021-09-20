<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ 18 Gabriel</title>
</head>
<body>
    <?php
        require_once 'computador.php';

        $computador1 = new Computador();
        $computador1->modelo = "Dell Inspiron";
        $computador1->processador = "Intel Core i7";
        $computador1->memoriaram = "16Gb";

        echo "<pre>";
            print_r($computador1);
        echo "</pre>";
    ?>
</body>
</html>
