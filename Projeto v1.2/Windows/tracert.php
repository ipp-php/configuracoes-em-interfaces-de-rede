<?
    $tracert = "";
    if(isset($_GET['host1'])){
        if(($_GET['maxsalto']=="")){
            
            $comando = "tracert -h 20 {$_GET['host1']}";
            $tracert = iconv("cp850", "utf-8", shell_exec($comando));
                                    }
        else{
            $comando = "tracert -h {$_GET['maxsalto']} {$_GET['host1']}";
            $tracert = iconv("cp850", "utf-8", shell_exec($comando));
        }
    }   
?>

<form action="<?=$_SERVER['PHP_SELF']?>">
    <input type="hidden" name="page" value="tracert">
    <div>
        <input type="text" name="host1" id="host" placeholder="Host" required="required"><br>
    </div>
    <div>
       <input type="text" name="maxsalto" id="maxsalto" placeholder="Número de saltos"><br>
    </div>
    <input type="submit" value="Tracert">
    
    
    
</form>
<pre><?=$tracert?></pre>