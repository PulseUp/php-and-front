<?php

$host='localhost';
$user='root';
$password = '';
$db='test';

try {
	$pdo = new PDO("mysql:dbname=$db; host=$host", $user, $password);
} catch (PDOException $e) {
	die($e->getMessage());
}