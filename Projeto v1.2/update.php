<?
require_once "crudUser.php";

$user;
if(isset($_GET['id'])){
	$id = $_GET['id'];
	$user = readById($id);
}

if(isset($_GET['nome'])){
	update($_GET['iduser'], $_GET['nome'], $_GET['login'], $_GET['senha']);
	header("Location:indexadmin.php");
}
?>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="<?=$_SERVER['PHP_SELF']?>">
		<input type="hidden" name="iduser" value="<?=$user['iduser']?>">
		Nome:<br>
		<input type="text" name="nome" value="<?=$user['nome']?>"><br>
		Login:<br>
		<input type="text" name="login" value="<?=$user['login']?>"><br>
		Senha:<br>
		<input type="password" name="senha" value="<?=$user['senha']?>"><br>	
		<input type="submit" name="enviar" value="Cadastrar">
	</form>
</body>
</html>