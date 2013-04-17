<?
session_start();
   
unset($_SESSION["user"]);
     
session_destroy();
     
header("Location: http://localhost/Projeto%20v1.2/index.php");
?>

