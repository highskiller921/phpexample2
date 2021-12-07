<?php
$id=$_REQUEST["id"];
$password=$_REQUEST["passwd"];
$name=$_REQUEST["name"];
$tel=$_REQUEST["tel"];


$db_user="ppp";
$db_pass="123456";
$db_host="localhost";
$db_name="phptest";
$db_type="mysql";
$dsn="$db_type:host=$db_host;dbname=$db_name;charset=utf8";
try{ 
    $pdo= new PDO($dsn,$db_user,$db_pass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES,PDO::ERRMODE_EXCEPTION);

}catch(Exception $ex){

}
