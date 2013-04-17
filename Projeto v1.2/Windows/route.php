<?
	$route = iconv("cp850", "utf-8", shell_exec("route PRINT")); 
?>
<pre><?=$route?></pre>


<form action="<?=$_SERVER['PHP_SELF']?>">

			
</form>