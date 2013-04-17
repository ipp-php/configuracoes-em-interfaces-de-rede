<?
session_start();

 

require("config.php");
     //Caso o botão de login tenha sido apertado tratar da seguinte forma:
    

if(isset($_REQUEST["enviar_login"])){
     
        if (!empty($_POST) AND (empty($_POST['login_usuario']) OR empty($_POST['login_senha']))) {
        header("Location: index.php"); exit;
    }
        
        $tb = $pdo->prepare("SELECT `iduser`, `nome`, `login`, `senha` FROM `user` WHERE (`login` = ?) and `senha`=?");
        
        $tb->bindParam(1, $_POST["login_usuario"]);
		$tb->bindParam(2, $_POST["login_senha"]);
        $tb->execute();
        $l = $tb->fetch(PDO::FETCH_ASSOC);
        $tb = null;
        if(!empty($l)){
                 $_SESSION["usuario"] = $l["iduser"];  header("Location: http://localhost/Projeto%20v1.2/windows/index.php");
       
        }else{
   
        echo "<script>alert('Login Falhou');</script>";
        
        }   
     
    } // caso o usuário esteja no banco será logado caso contrário será exibido o alerta
?>
        
<?
     //Caso o botão de cadastro tenha sido apertado tratar da seguinte forma:
     
if(isset($_REQUEST["enviar_cadastro"])){
     
        if(empty($_POST["cadastro_nome"]) || empty($_POST["cadastro_usuario"]) || empty($_POST["cadastro_senha"])){
       
            echo "<script>alert('Preencha todos os campos antes de enviar seu cadastro!');</script>";  
       

       // Caso o campo não esteja vazio, vai no else verificar se o usuário já existe no banco caso já exista exibe mensagem e volta para index.php
        }else{
            $usuario = $_POST["cadastro_usuario"];
            $sql = 'SELECT COUNT(iduser) AS total FROM user WHERE `login` = ?';
            
            $stmt = $pdo->prepare($sql);
            $stmt->execute(array($usuario));
            $total = (int) $stmt->fetchObject()->total;
            
            if ($total > 0) {
                 echo "<script>alert('Esse login já existe!\\n Tente novamente com outro login');document.location='index.php';</script>";
              } else {
               
            // caso o login não exista no banco o cadastro é realizado.
                  $tb = $pdo->prepare("INSERT INTO `user` VALUES (null, ?, ?, ?)");
			            $tb->bindParam(1, $_POST["cadastro_nome"]);
			            $tb->bindParam(2, $_POST["cadastro_usuario"]);
			            $tb->bindParam(3, $_POST["cadastro_senha"]);
                  $tb->execute();
                  $tb = null;
            
                echo "<script>alert('Cadastro efetuado com sucesso!\\nFaça seu login agora');document.location='index.php';</script>";
             }
        }
     
}
?>


<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IPP Networking Interfaces Project</title>
  <link rel="stylesheet" href="http://localhost/Projeto v1.2/background.css">
</head>
<body>
	
	<div id="div1"></div>
    <div id="div2"></div>
    <div id="div3"></div>
	
 <?if(!isset($_SESSION["usuario"])){?>
  <!-- Caso o usuário não esteja logado vai exibir a opção de login e de cadastro 
      Caso ele esteja logado não vão aparecer essas opções.-->    
      

       			                 <!--  Login                -->
    
            <div id="login">  
		  	       <form id="form1" name="form1" method="post" action="<?=$_SERVER['PHP_SELF']?>">
			 	         <input type="text" name="login_usuario" placeholder="Login" required="required"><br>
				          <input type="password" name="login_senha" placeholder="Password" required="required">		
				          <input type="submit" name="enviar_login" value="Entrar" id="button">
			         </form>
	 		                           <!--  Fim do login              -->
	         </div> 
 
  
    <?}?> 
           <iframe  id="video" width="560" height="315" src="http://www.youtube.com/embed/V4nZIXigjTc" frameborder="0" allowfullscreen></iframe>    
  <?if(!isset($_SESSION["usuario"])){?>   
    <!--  Não mostrar o campo dentro desse IF caso o usuário esteja logado               --
    
                              
                              <!--  Cadastro                -->
            <div id="cadastro">
              <table>
                
                 <form id="form2" name="form2" method="post" action="<?=$_SERVER['PHP_SELF']?>">
                   <tr>
  					         <td>Nome:</td>  
                     <td><input type="text" name="cadastro_nome" required="required"></td>
                  </tr>
                  <tr>
					           <td> Login: </td> 
                     <td><input type="text" name="cadastro_usuario" required="required"></td>
                  </tr>     
                  <tr>     
					           <td> Senha: </td> 
                     <td><input type="password" name="cadastro_senha"  required="required"></td>
                  </tr>     
    				       </table> <br>
                     <td><input  id="enviar" type="submit" value="" name="enviar_cadastro" ></td>
                  
    		        </form>
               
           </div>
     <?}?>
         <!-- Fim do cadastro-->    		
        
        
        <!-- Caso o usuário esteja conectado mostrar botão de logout-->
 <?if(isset($_SESSION["usuario"])){?>   
      
        <form  action='sair.php'> 
               <input id="sair" type="Submit" value="" name="fazer_logout">
            </form>
   
     <?}?>   
</body>
</html>