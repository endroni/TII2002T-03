<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ 19 Gabriel</title>
</head>
<body>
    
    <?php
        require_once 'moto.php';
        $moto1 = new Moto();
        $moto1->nome = "Tiger";
        //$moto1->cilindrada = "900cc";
        //$moto1->tanque = "20";

        echo "<pre>";
            print_r($moto1->descricao());
        echo "</pre>";
    ?>

</body>
</html>