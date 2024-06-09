<?php
require '../login/koneksi.php';

$judul = $_GET['judul'];

$query = mysqli_query($koneksi, "SELECT * FROM blog WHERE judul = '$judul'");

$result = mysqli_fetch_assoc($query);


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- CSS -->
    <link rel="stylesheet" href="../assets/css/style.css?<?= time(); ?>">
    <title>Blog</title>
</head>

<body>

    <!-- Navbar -->
    <nav class="nav-head navbar navbar-expand-lg">
        <div class="container d-flex justify-content-between align-items-center">

            <a class="navbar-brand" href="#">Technology</a>

            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="../index.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="tentang.php">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="kontak.php">Contact</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../login/login.php" target="_blank">Login</a>
                </li>

            </ul>

        </div>
    </nav>

    <!-- Content -->

    <div class="container mt-5 p-0">

        <h2 class="text-center"><?= $result['judul']; ?></h2>

        <p class="card-text text-center"><small class="text-body-secondary"><?= $result['penulis']; ?> - Henbrem Media</small></p>

        <div class="row">
            <div class="col-lg-12 p-0">
                <img src="../img/<?= $result['gambar']; ?>" alt="">
            </div>
            <div class="col-lg-12">
                <p class="card-text text-start"><small class="text-body-secondary"> https://github.com/syah1404/tubes</small>
                </p>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-lg-8">
                <p class="text-start"><?= $result['isi']; ?></p>
            </div>
            <div class="row col-lg-4">

                <div class="img-box">
                    <div class="card mb-3" style="max-width: 540px;">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="../img/1.jpg" style="width: 100%; height: 100%;" class="img-fluid rounded-start object-fit-cover" alt="...">
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                                    <div class="card-body">
                                        <a href="#" class="card-link">Card link</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </div>

    <div class="container">
        <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 my-4 border-top">
            <p class="col-md-4 mb-0 text-muted">&copy; 2024 delie's Company, Inc</p>

            <a href="/" class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                <svg class="bi me-2" width="40" height="32">
                    <use xlink:href="#bootstrap" />
                </svg>
            </a>

            <ul class="nav col-md-4 justify-content-end">
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Home</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Features</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">Pricing</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">FAQs</a></li>
                <li class="nav-item"><a href="#" class="nav-link px-2 text-muted">About</a></li>
            </ul>
        </footer>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>