<?
	    $netstat = iconv("cp850", "utf-8", shell_exec("netstat")); 
?>
<pre><?=$netstat?></pre>


<form action="<?=$_SERVER['PHP_SELF']?>">

			
</form>
