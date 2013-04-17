<?

$servidor_mysql = 'localhost';
$nome_banco = 'ipp_db';
$usuario = 'root';
$senha = '';
     
//Não altere o código abaixo
$pdo = new PDO("mysql:host=$servidor_mysql;dbname=$nome_banco","$usuario","$senha");