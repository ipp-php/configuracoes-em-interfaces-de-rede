<div id="comandos">
<?
	$ping = "";
	if(isset($_GET['host'])){
		if(isset($_GET['acao'])){

			$comando = "ping {$_GET['host']}";
			if(in_array("repeticao", $_GET['acao']))
				$comando .= " -n {$_GET['repeticao']}";
			if(in_array("intervalo", $_GET['acao']))
				$comando .= " -w {$_GET['intervalo']}";
		
			$ping = iconv("cp850", "utf-8", shell_exec($comando)); 
								}
		else 
			{	
				$comando = "ping {$_GET['host']}";
				$ping = iconv("cp850", "utf-8", shell_exec($comando)); 
			}		
	}
?>


<form action="<?=$_SERVER['PHP_SELF']?>">
	
	<div>
		<input type="text" name="host" id="host" placeholder="Host" required="required"><br>
	</div>
	<div>
		Repetição <input type="checkbox" name="acao[]" value="repeticao"><br>	
		<input type="radio" name="repeticao" id="rep5" value="5">
		<label for="rep5">5</label>
		<input type="radio" name="repeticao" id="rep10" value="10">
		<label for="rep10">10</label>
		<input type="radio" name="repeticao" id="rep20" value="20">
		<label for="rep20">20</label>
	</div>
	
	<div>
		Intervalo <input type="checkbox" name="acao[]" value="intervalo"><br>	
		<input type="radio" name="intervalo" id="int1" value="1">
		<label for="int1">1s</label>
		<input type="radio" name="intervalo" id="int2" value="2">
		<label for="int2">2s</label>
		<input type="radio" name="intervalo" id="int3" value="3">
		<label for="int3">3s</label>
	</div>
	<input type="submit" value="Ping">
</form>

<pre><?=$ping?></pre>
</div>
