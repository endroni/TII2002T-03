<?php
class Usuario{
    private $pdo;
    public $msgErro = ""; // se estiver vazia é porque está ok

    public function conectar($banco, $host, $usuario, $senha){
        global $pdo; // esse global é para o engineer saber que é o atributo global. 
        try {
            $pdo = new PDO("mysql:dbname=".$banco.";host=".$host,$usuario,$senha);            
        } catch (PDOException $e) {
            $msgErro = $e->getMessage();            
        }
    }

    public function cadastrar($nome, $telefone, $email, $senha){
        global $pdo;
        // Verificar se já está cadastrado
        $sql = $pdo->prepare("SELECT id_usuario FROM tbl_usuario WHERE email = :e");
        $sql->bindValue(":e", $email);
        $sql->execute();

        if($sql->rowCount() > 0){ //rowCount conta quantas linhas retornaram
            return false; // já existe
        } else {
            // Caso não exista, cadastrar
            $sql = $pdo->prepare("INSERT INTO tbl_usuario (nome, telefone, email, senha) VALUES (:n, :t, :e, :s)");
            $sql->bindValue(":n", $nome);
            $sql->bindValue(":t", $telefone);
            $sql->bindValue(":e", $email);
            $sql->bindValue(":s", md5($senha));
            $sql->execute();
            return true;
        }
    }

    public function logar($email, $senha){
        global $pdo;
        // Verificar se o email e senha estão cadastrados se sim
        $sql = $pdo->prepare("SELECT id_usuario FROM tbl_usuario WHERE email = :e AND senha = :s");
        $sql->bindValue(":e", $email);
        $sql->bindValue(":s", md5($senha));
        $sql->execute();

        if($sql->rowCount() > 0){
            // Entrar no sistema (sessao)
            $dado = $sql->fetch(); // transforma em array
            session_start();        //starta a sessao
            $_SESSION['id_usuario'] = $dado['id_usuario']; // Guardando o id do usuário na superglobal da sessão
            return true; // logado com sucesso
        }else{
            return false; // não encontrou o usuário
        }
    }
}
?>