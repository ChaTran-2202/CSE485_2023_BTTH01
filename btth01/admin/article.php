<?php
require '../includes/database-connection.php';

$sql = 'SELECT * FROM baiviet';
$statement = $pdo->query($sql);
$article = $statement->fetchAll();
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
<?php include '../layout/admin_header.php'; ?>
<main class="container mt-5 mb-5">
    <!-- <h3 class="text-center text-uppercase mb-3 text-primary">CẢM NHẬN VỀ BÀI HÁT</h3> -->
    <div class="row">
        <div class="col-sm">
            <a href="add_article.php" class="btn btn-success">Thêm mới</a>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Tiêu đề</th>
                    <th scope="col">Tên bài hát</th>
                    <th scope="col">mã thể loại</th>
                    <th scope="col">Tóm tắt</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Mã tác giả</th>
                    <th scope="col">ngày viết</th>
                    <th scope="col">hình ảnh</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($article as $article) { ?>
                    <tr>
                        <th scope="row"><?= $article['ma_bviet'] ?></th>
                        <td><?= $article['tieude'] ?></td>
                        <td><?= $article['ten_bhat'] ?></td>
                        <td><?= $article['ma_tloai'] ?></td>
                        <td><?= $article['tomtat'] ?></td>
                        <td><?= $article['noidung'] ?></td>
                        <td><?= $article['ma_tgia'] ?></td>
                        <td><?= $article['ngayviet'] ?></td>
                        <td><?= $article['hinhanh'] ?></td>
                        <td>
                            <a href="edit_article.php?id=<?= $article['ma_bviet'] ?>"><i
                                        class="fa-solid fa-pen-to-square"></i></a>
                        </td>
                        <td>
                            <a href="delete_author.php?id=<?= $author['ma_bviet'] ?>"><i class="fa-solid fa-trash"></i></a>
                        </td>
                    </tr>
                <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
<?php include '../layout/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>