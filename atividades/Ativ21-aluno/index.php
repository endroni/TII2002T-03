<body>

<?php
require_once 'aluno.php';
$aluno = new aluno('Rafael','rafael@senai.com',"BH",true);


$aluno->setEmail('');
$aluno->setCidade('bh1');
$aluno->setStatus(true);

echo "<pre>";
print_r($aluno);
echo "</pre>"



?>
</body>