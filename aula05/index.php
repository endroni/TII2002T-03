<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>Encapsulamento</h2>
    <h3>Um dos pilares da POO</h3>
    <h4>Uma boa prática,</h4>
    <p>Ocultar partes independentes da implementação, permitindo construir partes invisiveis ao mundo exterior.</p>
    <h3>Interface</h3>
    <p>Lista de serviços fornecidos por um componente. É o contato com o mundo exterior, que define o que pode ser feito com um objeto dessa classe.</p>
    <p>Interface só tem métodos</p>
    <p>Exemplo Interface:</p>
    <img src="interface.png" alt="Interface" width="150px">
    <p>Exemplo Classe</p>
    <img src="clasArCondicionado.png" alt="Diagrama de Classe" width="100px">
    <p>Vantagens:</p>
    <ul>
        <li>Tornar mudanças invisíveis</li>
        <li>Facilitar reutilização do código</li>
        <li>Reduzir efeitos colaterais</li>
    </ul>
    <h2>Exemplo: Sistema para controle do ar condicionado</h2>

    <?php
    require_once 'arCondicionado.php';

    $ac1 = new ArCondicionado(16, 'Samsung', 'T900', 'Janela', true);
    
    $ac1->Diminuir();
    
    ?>
</body>
</html>