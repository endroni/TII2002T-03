<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Página principal!</h2>    

    <?php
    require_once 'pessoa.php';
    // Criando um objeto - instanciando
    $pessoa1 = new Pessoa();
    $pessoa1->nome = "Marcio";
<<<<<<< HEAD
    $pessoa1->telefone = "(31)97412-5487";
    $pessoa1->fala = true;
    
    echo "<pre>";
    print_r($pessoa1);
=======
    // $pessoa1->telefone = "(31)97412-5487";
    // $pessoa1->fala = true;
    
    echo "<pre>";
    print_r($pessoa1->falar());
>>>>>>> 9ce37fc1ce31d67f173465b1775162dd7a6347f6
    echo "</pre>";
    ?>
</body>
</html>