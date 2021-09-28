<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produto</title>
</head>
<body>
    <?php
        require_once 'produto.php';

        $produto1 = new Produto('Monitor', 578.53, 10);
        $produto1->removerProdutos(2);
        echo "<pre>";
            print_r($produto1);
        echo "</pre>";
    ?>
</body>
</html>