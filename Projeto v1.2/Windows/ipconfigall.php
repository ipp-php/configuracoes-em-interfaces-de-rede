<?
	$ipconfig = iconv("cp850", "utf-8", shell_exec("ipconfig /all")); 
?>
<pre><?=$ipconfig?></pre>
 
<form action="<?=$_SERVER['PHP_SELF']?>">

			
</form>