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
    <title>Login</title>
</head>
<body>
    <div id="corpo-form">
        <h1>Entrar</h1>
        <form method="post">
            <input type="email" name="email" placeholder="Usuário">
            <input type="password" name="senha" placeholder="Senha">
            <input type="submit" value="ACESSAR">
            <a href="cadastrar.php">Ainda não é inscrito!<strong>Cadastrar</strong></a>
        </form>
    </div>
    <?php
          // Verificar se clicou no botão 
        if(isset($_POST['email'])){  
            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);
            
            // Verificar se está preenchido
            if(!empty($email) && !empty($senha)){
                $u->conectar("db_login", "localhost", "root", "");
                if ($u->msgErro == ""){
                    if($u->logar($email, $senha)){
                        header("location: AreaPrivada.php");
                    }else {
                        ?>
                            <div class="msg-erro">
                                Email e/ou senha inválidos!
                            </div>
                        <?php                        
                    }
                }else{
                    ?>
                        <div class="msg-erro">
                            <?php echo "Error: ". $u->msgErro; ?>
                        </div>
                    <?php
                }
            } else {
                ?>
                    <div class="msg-erro">
                        "Preencha todos os campos!
                    </div>
                <?php
            }
        }
        
    ?>
</body>
</html>