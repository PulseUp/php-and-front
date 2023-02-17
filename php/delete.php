<?php
include 'config.php';

global $pdo;
$get_id = $_GET['id'];

if (isset($_POST['delete_submit'])) {
    $sql = "DELETE FROM table_table WHERE id=?";
    $query = $pdo->prepare($sql);
    $query->execute([$get_id]);
    header('Location: '. $_SERVER['HTTP_REFERER']);
}
