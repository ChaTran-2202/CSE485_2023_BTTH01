<<<<<<< HEAD
=======
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

<<<<<<< HEAD
$statement = $pdo->query($sql);   
$content  = $statement->fetch();
=======

 $statement = $pdo->query($sql);   
 $content  = $statement->fetch();
>>>>>>> origin/hieu
?>
>>>>>>> hieu
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<<<<<<< HEAD
=======
    <link rel="stylesheet" href="../css/style.css">
>>>>>>> hieu
</head>
<body>
    <header>
    <?php include './view/nav.php'; ?>
<<<<<<< HEAD

    </header>
    <main class="container mt-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
       
                <div class="row mb-5">
                    <div class="col-sm-4">
                        <img src="images/songs/cayvagio.jpg" class="img-fluid" alt="...">
                    </div>
                    <div class="col-sm-8">
                        <h5 class="card-title mb-2">
                            <a href="" class="text-decoration-none">Cây và gió</a>
                        </h5>
                        <p class="card-text"><span class=" fw-bold">Bài hát: </span>Cây và gió</p>
                        <p class="card-text"><span class=" fw-bold">Thể loại: </span>Nhạc trữ tình</p>
                        <p class="card-text"><span class=" fw-bold">Tóm tắt: </span>Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát “Cây và gió” đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                        <p class="card-text"><span class=" fw-bold">Nội dung: </span>Em và anh, hai đứa quen nhau thật tình cờ. Lời hát của anh từ bài hát “Cây và gió” đã làm tâm hồn em xao động. Nhưng sự thật phũ phàng rằng em chưa bao giờ nói cho anh biết những suy nghĩ tận sâu trong tim mình. Bởi vì em nhút nhát, em không dám đối mặt với thực tế khắc nghiệt, hay thực ra em không dám đối diện với chính mình.</p>
                        <p class="card-text"><span class=" fw-bold">Tác giả: </span>Nguyễn Văn Giả</p>

                    </div>          
        </div>
    </main>
    <?php include './view/footer.php'; ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>
</html>
=======
    <div  class="d-flex justify-content-evenly">
        <div class="mt-3 " style="display: inline-block;text-align: center;">
                <div class="card mb-2 col-5" style="width: 70%;display: inline-block;">
                <img src= "./images/songs/<?=$songs[$_GET['id']]?>"  class="card-img-top" alt="...">
               
                        </div> 
            </div>

            <div style="display: inline-block;">
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



>>>>>>> hieu
