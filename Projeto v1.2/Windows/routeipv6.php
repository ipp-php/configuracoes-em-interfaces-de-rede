<?
	$routeipv6 = iconv("cp850", "utf-8", shell_exec("route PRINT -6")); 
?>
<pre><?=$routeipv6?></pre>

 
<form action="<?=$_SERVER['PHP_SELF']?>">

			
</form>