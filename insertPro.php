<?php
$id = $_REQUEST["id"];
$password = $_REQUEST["passwd"];
$name = $_REQUEST["name"];
$tel = $_REQUEST["tel"];

require_once("MYDB.php");
$pdo=db_connect();

try{
    $pdo->beginTransaction();
    $sql="insert into member(id, passwd, name, tel, reg_date) values(?,?,?,?, now())";
    $stmh=$pdo->prepare($sql);
    $stmh->bindValue(1, $id,PDO::PARAM_STR);
    $stmh->bindValue(2, $passwd,PDO::PARAM_STR);
    $stmh->bindValue(3, $name,PDO::PARAM_STR);
    $stmh->bindValue(4, $tel,PDO::PARAM_STR);
    $stmh->execute();
    $pdo->commit();
    print "data appended";

} catch(PDOException $Exception){
    $pdo->rollBack();
    print "error:".$Exception->getMessage();
}
