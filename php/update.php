<?php
include 'config.php';
global $pdo;

$edit_name = $_POST['edit_name'];
$edit_email = $_POST['edit_email'];
$edit_password = $_POST['edit_password'];
$get_id = $_GET['id'];
if (isset($_POST['edit-submit'])) {
	$sql = "UPDATE table_table SET updated_at=now(),  name=?, email=?, password=? WHERE id=?";
	$query = $pdo->prepare($sql);
	$query->execute([$edit_name, $edit_email, $edit_password, $get_id]);
	header('Location: '. $_SERVER['HTTP_REFERER']);
}
