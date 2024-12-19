<?php
  

$host      ='localhost';      //ENDEREÇO DO SERVIDOR LOCAL OU REMOTO
$dbname    ='db_criativodev';   //NOME DO BANCO DE DADOS
$username  ='root';           //NOME DO USUARIO DO BANCO DE DADOS
$password  ='';     //SENHA DO BANCO DE DADOS


try{
    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username,$password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(PDOException $e){
    echo 'Erro de conexão: ' . $e->getMessage(); 
}

?>