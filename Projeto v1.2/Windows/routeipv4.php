<?
	$routeipv4 = iconv("cp850", "utf-8", shell_exec("route PRINT -4")); 
?>
<pre><?=$routeipv4?></pre>

<form action="<?=$_SERVER['PHP_SELF']?>">

			
</form>