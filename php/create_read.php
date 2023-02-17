<?php

include 'config.php';
global $pdo;

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];

if (isset($_POST['submit'])) {
    $sql = ("INSERT INTO table_table(`created_at`, `updated_at`, `name`, `email`, `password`) VALUES(now(), now(), ?,?,?)");
    $query = $pdo->prepare($sql);
    $query->execute([$name, $email, $password]);
    $success = header('Location: '. $_SERVER['HTTP_REFERER']);
}




$sql = $pdo->prepare("SELECT * FROM `table_table`");
$sql->execute();
$result = $sql->fetchAll();
