<?php
require '../includes/database-connection.php';
if (isset($_POST['btnAdd'])) {
    $sqlEnd = "SELECT * FROM theloai ORDER BY ma_tloai DESC";
    $statement = $pdo->query($sqlEnd);
    $index = $statement->fetch();
    $indexEnd = $index['ma_tloai'] + 1;

    $name = $_POST['txtCatName'];
    $sql = "INSERT INTO theloai (ma_tloai, ten_tloai) VALUES ('$indexEnd','$name')";
    $pdo->exec($sql);
    header('Location:category.php');
}

if (isset($_POST['btnSave'])){
    $id = $_POST['txtCatId'];
    $name = $_POST['txtCatName'];
    $sql = "UPDATE theloai SET ten_tloai = ? WHERE ma_tloai = ?";
    $statement = $pdo->prepare($sql);
    $result = $statement->execute(array($name, $id));
    header('Location:category.php');
}
?>
