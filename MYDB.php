<?php
function db_connect()
{
    $db_user = "ppp";
    $db_pass = "123456";
    $db_host = "localhost";
    $db_name = "phptest";
    $db_type = "mysql";
    $dsn = "$db_type:host=$db_host;dbname=$db_name;charset=utf8";
    try {
        $pdo = new PDO($dsn, $db_user, $db_pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
        print "database connect";
    } catch (PDOException $Exception) {
        die('error:' . $Exception->getMessage());
    }
    return $pdo;
}
