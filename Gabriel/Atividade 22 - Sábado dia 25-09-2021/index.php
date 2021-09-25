<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ 22 Gabriel - Conta</title>
</head>
<body>
    
    <?php
    
        require_once 'Conta.php';

        $con1 = new Conta(00002456325, "corrente", "Pedro Silva", 200, true, 5, 5, 199.00, 30245007654);

        $con1->EncerrarConta();

    ?>


</body>
</html>