<?php
require '../includes/database-connection.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Music for Life</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="css/style_login.css">
</head>
<body>
<div class="content">
    <?php include '../layout/admin_header.php'; ?>
    <main class="container mt-5 mb-5">
        <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
        <div class="row">
            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="" class="text-decoration-none">Người dùng</a>
                        </h5>

                        <h5 class="h1 text-center">
                            110
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="./category.php" class="text-decoration-none">Thể loại</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php
                            $sql = "SELECT COUNT(ma_tloai) FROM theloai";
                            $statement = $pdo->query($sql);
                            $result = $statement->fetch();
                            echo $result['COUNT(ma_tloai)'];
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="./author.php" class="text-decoration-none">Tác giả</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php
                            $sql = "SELECT COUNT(ma_tgia) FROM tacgia";
                            $statement = $pdo->query($sql);
                            $result = $statement->fetch();
                            echo $result['COUNT(ma_tgia)'];
                            ?>
                        </h5>
                    </div>
                </div>
            </div>

            <div class="col-sm-3">
                <div class="card mb-2" style="width: 100%;">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="./article.php" class="text-decoration-none">Bài viết</a>
                        </h5>

                        <h5 class="h1 text-center">
                            <?php
                            $sql = "SELECT COUNT(ma_bviet) FROM baiviet";
                            $statement = $pdo->query($sql);
                            $result = $statement->fetch();
                            echo $result['COUNT(ma_bviet)'];
                            ?>
                        </h5>
                    </div>
                </div>
            </div>
        </div>
    </main>
</div>
<footer class="footer">
    <?php include '../layout/footer.php'; ?>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>