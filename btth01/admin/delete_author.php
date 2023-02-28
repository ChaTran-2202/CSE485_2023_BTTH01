<?php

require '../includes/database-connection.php';
        if(isset($_GET['id'])){
       
        $sql = "DELETE FROM tacgia WHERE ma_tgia = {$_GET['id']}";
        $pdo->exec($sql);
        header('Location:author.php');
        }
        
?>