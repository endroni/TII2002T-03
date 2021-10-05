<?php
    require_once 'CLASSES/usuario.php';
    $u = new Usuario();
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Cadastrar</title>
</head>
<body>
    <div id="corpo-form-cad">
        <h1>Cadastrar</h1>
        <form method="post">
            <input type="text" name="nome" placeholder="Nome Completo" maxlength="40">
            <input type="text" name="telefone" placeholder="Telefone" maxlength="40">
            <input type="email" name="email" placeholder="Usuário" maxlength="50">
            <input type="password" name="senha" placeholder="Senha" maxlength="20">
            <input type="password" name="confirmarSenha" placeholder="Confirmar Senha">
            <input type="submit" value="CADASTRAR">            
        </form>
    </div>
    <?php
        // Verificar se clicou no botão
        // isset verifica a existência de uma variável, de um array, ...

        if(isset($_POST['nome'])){  
            $nome = addslashes($_POST['nome']);
            $telefone = addslashes($_POST['telefone']);
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            $confirmarSenha = addslashes($_POST['confirmarSenha']);
            // Verificar se está preenchido
            if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarSenha)){
                $u->conectar("db_login", "localhost", "root", "");
                if($u->msgErro == ""){ // tudo ok
                    if($senha == $confirmarSenha){
                        if($u->cadastrar($nome,$telefone, $email, $senha)){
                            ?>
                                <div id="msg-sucesso">
                                    Cadastrado com sucesso! Acesse para entrar
                                </div>
                            <?php                            
                        }else {
                            ?>
                                <div class="msg-erro">
                                    E-mail já cadastrado!
                                </div>
                            <?php
                        }
                        
                    }else {
                        ?>
                            <div class="msg-erro">
                                Senha e Confirmar Senha não são iguais
                            </div>
                        <?php                        
                    }
                } else {
                    ?>
                        <div class="msg-erro">
                            Erro: <?php echo $u->msgErro; ?>
                        </div>
                    <?php                    
                }
            } else {
                ?>
                    <div class="msg-erro">
                        Preencha todos os campos!
                    </div>
                <?php                   
            }
        }   

    ?>
</body>
</html>