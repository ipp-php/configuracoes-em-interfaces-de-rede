

	<div id="comandos">
<?
	$ipconfig = iconv("cp850", "utf-8", shell_exec("ipconfig")); 
?>
<pre><?=$ipconfig?></pre>

</div>
 
<form action="<?=$_SERVER['PHP_SELF']?>">			
</form>
