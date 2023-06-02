<?php
function connect($host, $db, $user, $pass)
{
    $dsn = "mysql:host=$host;dbname=$db";
    $pdo = new PDO($dsn, $user, $pass);
    return $pdo;
}


function query($queryt_text, $params)
{
    $pdo = connect("127.0.0.1", "aeon", "root", "root");
    $stmt = $pdo->prepare($queryt_text);
    $stmt->execute($params);
    return $stmt;
}