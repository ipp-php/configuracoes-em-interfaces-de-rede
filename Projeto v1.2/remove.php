<?
include "crudUser.php";
if(isset($_GET['id'])){
	$user = readById($_GET['id']);
	$nome = $user['nome'];
}

if(isset($_POST['sim'])){
	remove($_POST['id']);
	header("Location:index.php");
}
if(isset($_POST['nao'])){
	header("Location:index.php");
}
?>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Remove</title>
</head>
<body>
	<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
		<input type="hidden" name="id" value="<?=$user['iduser']?>">
		<p>Tem certeza que deseja excluir a conta de <?=$nome?>?</p>
		<input type="submit" name="sim" value="Sim">
		<input type="submit" name="nao" value="Não">
	</form>
</body>
</html>