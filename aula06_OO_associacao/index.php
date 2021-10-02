<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associação</title>
</head>
<body>
    <?php
        require_once 'pessoa.php';
        $t[0] = new Fone('(31)', '98888-4444', true);
        $t[1] = new Fone('(11)', '97777-3333', true);

        $p[0] = new Pessoa('Rubem', 'Cândido', $t[1]);
        $p[1] = new Pessoa('Eric', 'Sampaio', $t[0]);

        echo "<pre>";
            print_r($p[1]);
        echo "</pre>";
    ?>
</body>
</html>