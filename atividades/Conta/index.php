<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta</title>
</head>
<body>
    <?php
        require_once 'conta.php';
        require_once 'titular.php';

        $t[0] = new Titular('José', 'Silva', 756159);
        $t[1] = new Titular('Pedro', 'Alvares', 561597);

        $c5 = new Conta(5, 'cp', $t[0], null);
        $c6 = new Conta(6, 'cc', $t[1], 0);
        $c6->abrirConta($t[1]);
        echo "<pre>";
            print_r($c6);
        echo "</pre>";

        // $c1 = new Conta(1, 'cp', 'João', 50, false, null);
        // $c1->abrirConta();
        // $c2 = new Conta(2, 'cc', 'Pedro', 0, 753);
        // $c2->abrirConta();
        // $c2->depositar(500);
        // $c2->sacar(100);

        // $c3 = new ContaCorrente(3, 'cc', 'Andre', 500, null);
        // $c3->abrirConta();
        // $c3->tarifaMensal();

        // $c4 = new ContaPoupanca(4, 'cp', 'Tiago', 200, null);
        // $c4->abrirConta();
        // $c4->tarifaMensal();



        // echo "<pre>";
        //     print_r($c4);
        // echo "</pre>";
    ?>
</body>
</html>