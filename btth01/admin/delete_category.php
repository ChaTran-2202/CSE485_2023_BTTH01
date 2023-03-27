<?php
require '../includes/database-connection.php';
if (isset($_GET['id'])) {
    $sql = "DELETE FROM theloai WHERE theloai.ma_tloai = {$_GET['id']}";
    $pdo->exec($sql);
    header('Location:category.php');
}
?>