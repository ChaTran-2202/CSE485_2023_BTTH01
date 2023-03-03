<?php
require '../includes/database-connection.php';
if (isset($_POST['addNameAuthor'])) {
    $sqlEnd = "SELECT * FROM tacgia ORDER BY ma_tgia DESC";
    $stament = $pdo->query($sqlEnd);
    $index = $stament->fetch();
    $indexEnd = $index['ma_tgia'] + 1;

    $name = $_POST['txtNameAuthor'];
    $sql = "INSERT INTO tacgia (ma_tgia , ten_tgia) VALUES ('$indexEnd','$name')";
    $pdo->exec($sql);
    header('Location:author.php');
}
?>