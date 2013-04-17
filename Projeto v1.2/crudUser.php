<?
$pdo = new PDO('mysql:user=localhost;dbname=ipp_db', 'root', '');

function readAll(){
	global $pdo;
	$stmt = $pdo->prepare("SELECT * FROM user");
	$stmt->execute();
	$users = array();
	while($user = $stmt->fetch(PDO::FETCH_ASSOC)){
		$users[] = $user;
	}
	return $users;
}

function readById($id){
	global $pdo;
	$stmt = $pdo->prepare("SELECT * FROM user WHERE `iduser` = ?");
	$stmt->bindParam(1, $id);
	$stmt->execute();
	$user = $stmt->fetch(PDO::FETCH_ASSOC);
	return $user;
}

function remove($id){
	global $pdo;
	$stmt = $pdo->prepare("DELETE FROM `user` WHERE `iduser`= ?");
	$stmt->bindParam(1, $id);
	$stmt->execute();
}

function create($nome, $login, $senha){
	global $pdo;
	$stmt = $pdo->prepare("INSERT INTO `user` VALUES (null, ?, ?, ?)");
	$stmt->bindParam(1, $nome);
	$stmt->bindParam(2, $login);
	$stmt->bindParam(3, $senha);
	$stmt->execute();
}

function update($id, $nome, $login, $senha){
	global $pdo;
	$stmt = $pdo->prepare("UPDATE `user` SET `nome`= ?, `login`= ?, `senha`= ? WHERE `iduser`= ?");
	$stmt->bindParam(1, $nome);
	$stmt->bindParam(2, $login);
	$stmt->bindParam(3, $senha);
	$stmt->bindParam(4, $id);
	$stmt->execute();
}