<?php


//variaveis para conexão do banco de dados
$sgbd = "pgsql";
$host = "localhost";
$port = "5432";
$db_user = "postgres";
$db_password = "pg123";
$db_name = "login_simples";

// a conexão será feita usando PDO
try{
 // argumento enviado para o objeto PDO   
    // sgdb:host;port;db_name
    // usuario
    // senha
    // exceções 

 $pdo = new PDO("pgsql:host= $host; port=$port; dbname=$db_name", $db_user, $db_password, [PDO::ATTR_ERRMODE => PDO :: ERRMODE_EXCEPTION]);
 echo "Conectado ao banco de dados!";


}
catch (PDOException $erro){
 echo "Erro ao conectar o banco de dados. <br/>";
 die ($erro->getMessage());

}

?>