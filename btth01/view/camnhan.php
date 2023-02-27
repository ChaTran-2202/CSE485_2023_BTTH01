<?php 

$songs = [
    '',
    'longme.jpg',
    'vetmua.jpg',
    'phoipha.jpg',
    'quehuong.jpg',
    'datnuoc.jpg',
    'hardrock.jpg',
    'TheUnforgiven.jpg',
    'noitinhyeubatdau.jpg',
    'loveme.jpg',
    'stronger.jpg',
    'csmt.jpg',
    'cayvagio.jpg',
    'nguoithay.jpg',
];
// if(isset($_GET['id'])){
//     echo "<h2 style='color:red'>{$_GET['id']}</h2>";
// }
require './includes/database-connection.php';   

            // Functions 
$sql       = "SELECT baiviet.ma_bviet , baiviet.ten_bhat , theloai.ten_tloai , baiviet.tomtat , tacgia.ten_tgia 
                FROM baiviet 
                INNER JOIN theloai ON baiviet.ma_tloai = theloai.ma_tloai 
                INNER JOIN tacgia ON baiviet.ma_tgia = tacgia.ma_tgia 
                WHERE baiviet.ma_bviet = {$_GET['id']}"; // SQL

$statement = $pdo->query($sql);   
$content  = $statement->fetch();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>
    <header>
    <?php include './view/nav.php'; ?>
    <div  class="d-flex justify-content-evenly">
        <div style="display: inline-block; ">
                <div class="card mb-2 col-5" style="width: 50%;">
                <img src= "./images/songs/<?=$songs[$_GET['id']]?>"  class="card-img-top" alt="...">
               
                        </div> 
            </div>

            <div style="display: inline-block; width:600px">
                <h4 class="card-title  text-primary">
                    <?= $content['ten_bhat'] ?>
                </h4>

                <p> <strong>Bài hát:</strong> <?= $content['ten_bhat']?></p>  
                <p> <strong > Tóm tắt:</strong> <?= $content['tomtat']?> </p>
                <p> <strong> Nội dung:</strong> <?= $content['tomtat']?> </p>
                <p><strong> Tên tác giả:</strong>  <?= $content['ten_tgia']?></p>  

            </div>
        

    </div>
     
    <?php include './view/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>



