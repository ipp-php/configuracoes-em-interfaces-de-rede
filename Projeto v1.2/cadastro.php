<?
require_once "crudUser.php";

if(isset($_GET['nome'])){
    create($_GET['nome'], $_GET['login'], $_GET['senha']);
    header("Location:indexadmin.php");
}
?>
<html>
<head>
    <title></title>
</head>
<body>
    <form action="<?=$_SERVER['PHP_SELF']?>">
        Nome:<br>
        <input type="text" name="nome"><br>
        Login:<br>
        <input type="text" name="login"><br>
        Senha:<br>
        <input type="password" name="senha"><br>
        <input type="submit" name="enviar" value="Cadastrar">
    </form>
</body>
</html>


