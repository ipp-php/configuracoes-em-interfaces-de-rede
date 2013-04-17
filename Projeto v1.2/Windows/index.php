
<?
session_start();

 
if(!isset($_SESSION["usuario"])){
    echo "<script>alert('Usuário não está logado!\\n');document.location='http://localhost/Projeto%v1.2/index.php';</script>";
 
    exit;
 
}
?>

<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>IPP Networking Interfaces Project</title>
  <link rel="stylesheet" href="http://localhost/Projeto v1.2/background2.css">
</head>
<body>
	
	<div id="div1"></div>
	<div id="div2"></div>
	
        <div id='bkg'>  
		<div id='cssmenu'>
			<ul>
			   <li class='active'><a href='<?=$_SERVER['PHP_SELF']?>?page=ping'><span>Ping</span></a></li>
			    	
			   <li class='active'><a href='<?=$_SERVER['PHP_SELF']?>?page=tracert'><span>Tracert</span></a></li>
			   <li class='active'><a href='<?=$_SERVER['PHP_SELF']?>?page=netstat'><span>Netstat</span></a></li>
			   <li class='has-sub'><a href='<?=$_SERVER['PHP_SELF']?>?page=ipconfig'><span>Ipconfig</span></a>

   				<ul>
					<li class='last'><a href='<?=$_SERVER['PHP_SELF']?>?page=ipconfigall'><span>Detalhado</span></a></li></li>
					
				</ul>
			   <li class='active'><a href='<?=$_SERVER['PHP_SELF']?>?page=nslookup'><span>Nslookup</span></a></li>
			   <li class='has-sub'><a href='<?=$_SERVER['PHP_SELF']?>?page=route'><span>Route</span></a>
			   <ul>
					<li class='last'><a href='<?=$_SERVER['PHP_SELF']?>?page=routeipv4'><span>IPV4</span></a></li></li>
					<li class='last'><a href='<?=$_SERVER['PHP_SELF']?>?page=routeipv6'><span>IPV6</span></a></li></li>
					
				</ul>
			   
			   </li>
			   <li class><a href='<?=$_SERVER['PHP_SELF']?>?page=about'><span>About</span></a></li>
			   
			</ul>
			
			<form  action='sair.php'> 
               <input id="logout" type="Submit" value="" name="fazer_logout">
            </form>
			
		</div>
		</div>
		<div id="content">
			<? if(@$_GET['page'] == "ping")
			 	include "ping.php";
			 else if(@$_GET['page'] == "tracert")
			 	include "tracert.php";
			  else if(@$_GET['page'] == "sair")
			 	include "sair.php";
			 else if(@$_GET['page'] == "netstat")
			 	include "netstat.php";
			 else if(@$_GET['page'] == "ipconfig")
			 	include "ipconfig.php";
			 else if(@$_GET['page'] == "ipconfigall")
			 	include "ipconfigall.php";
			 else if(@$_GET['page'] == "nslookup")
			 	include "nslookup.php";
			 else if(@$_GET['page'] == "route")
			 	include "route.php";
			 else if(@$_GET['page'] == "routeipv4")
			 	include "routeipv4.php";
			 else if(@$_GET['page'] == "routeipv6")
			 	include "routeipv6.php";
			 else if(@$_GET['page'] == "about")
			 	include "about.php";
			 else
			 	include "ping.php"; ?>
		</div>

</body>
</html>