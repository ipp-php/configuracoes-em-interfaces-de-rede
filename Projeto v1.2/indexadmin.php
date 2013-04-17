<?
include "crudUser.php";
$users = readAll();
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<style type="text/css">
			table {
				counter-reset: count;
				width: 40%;
			}
			.idhost:before {
				counter-increment: count;
				content: counter(count);
			}
			table, tr {
				border-collapse: collapse;
				border: 1px solid #000;
			}
			td:nth-child(n+4){
				text-align: center;
			}
		</style>
	</head>
	<body>
		<h2>Tabela de usuários</h2>
		<?if(!empty($users)){?>
			<table border="1">
				<?foreach ($users as $user) {?>
					<tr>
						<td class="iduser"></td>
					<?foreach ($user as $nameCol=>$columns) {
						if($nameCol != "iduser"){?>
							<td><?=$columns?></td>
						<?}
					}?>
						<td>
							<a href="remove.php?id=<?=$user['iduser']?>">
								<img src="remove.png" alt="Remover" title="Remover">
							</a>
						</td>
						<td>
							<a href="update.php?id=<?=$user['iduser']?>">
								<img src="edit.png" alt="Editar" title="Editar">
							</a>
						</td>
					</tr>
				<?}?>
			</table>
		<?}else{?>
			<p>Nenhum Usuário foi cadastrado.</p>
		<?}?>

		<button onclick="location.href='cadastro.php'">Cadastrar usuário</button>
	</body>
</html>