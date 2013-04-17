<?
session_start();
require("config.php");
     
if(!isset($_SESSION["user"])){
     
        header("Location: index.php");
        exit;
     
}
     
if(isset($_REQUEST["enviar_login"])){
     
        if(empty($_POST["nome"]) || empty($_POST["login"]) || empty($_POST["senha"])){
       
        echo "<script>alert(‘Preencha todos os campos antes de enviar seu cadastro!’);</script>";  
       
        }else{
       
            $tb = $pdo->prepare("UPDATE `user` SET `nome` = ?, `login`= ?, `senha`= ? where iduser=?");
            $tb->bindParam(1, $nome);
            $tb->bindParam(2, $login);
            $tb->bindParam(3, $senha);
            $tb->bindParam(4, $_SESSION["user"]);
            $tb->execute();
            $tb = null;
           
            echo "<script>alert(‘Dados alterados com sucesso!’);</script>";
       
        }
     
} //Pega os dados do usuário ativo $tb = $conn->prepare("select * from usuario where id_usuario = :id"); $tb->bindParam(":id",$_SESSION["usuario"], PDO::PARAM_INT); $tb->execute(); $l = $tb->fetch(PDO::FETCH_ASSOC);
     
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IPP Networking Interfaces Project</title>
  <link rel="stylesheet" href="http://localhost/php/projeto2/windows/background.css">
</head>
<body>
	
	<div id="div1"></div>
	<div id="div2"></div>
	<div id="login">
			<!--  Login                -->
			

            <form id="form1" name="form1" method="post" action="dados.php">
     
                <p>Nome: <input name="nome" type="text" id="nome" value="<?php echo $l["nome_login"]?>" /></p>
                <p>Email: <input name="email" type="text" id="email" value="<?php echo $l["_usuario"]?>" /></p>
                <p>Senha: <input type="text" name="senha" value="<?php echo $l["senha_usuario"]?>" /></p>
                <input type="submit" name="enviar_login" id="button" value="Atualizar Dados" />
     
            </form>


	 		<!--  Fim do login              -->
	</div> 
	 
	 
		
</body>
</html>