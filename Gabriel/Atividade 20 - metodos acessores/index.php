<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ 20 Gabriel</title>
</head>
<body>
    
    <?php
    require_once 'moto.php';

    $moto1 = new Moto('Triumph','Tiger','1200');

    echo "<pre>";
        print_r($moto1);
    echo "</pre>";

    ?>

</body>
</html>