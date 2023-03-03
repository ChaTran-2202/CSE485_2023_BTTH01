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
require './includes/database-connection.php';
// Functions
$sql = "SELECT ma_bviet, ten_bhat FROM baiviet;"; // SQL
$statement = $pdo->query($sql);
$baiviets = $statement->fetchAll();
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
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <?php include './layout/header.php'; ?>
    <!-- start slider -->
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/slideshow/slide01.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slideshow/slide02.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="images/slideshow/slide03.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</header>
<!-- end slider -->

<main class=" container-fluid mt-3">
    <h3 class="text-center text-uppercase mb-3 text-primary">TOP bài hát yêu thích</h3>

    <div class="" style="text-align: center;">

        <?php foreach ($baiviets as $baiviet) { ?>

            <div class="col-2  me-4" style="display: inline-block">
                <div class="card mb-2" style="width: 100%;">
                    <img src="images/songs/<?= $songs[$baiviet['ma_bviet']] ?>" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title text-center">
                            <a href="./detail.php?id=<?= $baiviet['ma_bviet']; ?>"
                               class="text-decoration-none"> <?= $baiviet['ten_bhat']; ?> </a>
                        </h5>
                    </div>
                </div>
            </div>

        <?php } ?>
    </div>

</main>
<?php include './layout/footer.php'; ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>
</html>