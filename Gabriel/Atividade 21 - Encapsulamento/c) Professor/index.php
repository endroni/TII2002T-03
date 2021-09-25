<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ativ 21 Gabriel - Professor</title>
</head>
<body>
    
    <?php
    
        require_once 'Professor.php';

        $prof = new Professor("Marcos","Andrade",31985785635,true);

        $prof->Oculos();

    ?>


</body>
</html>