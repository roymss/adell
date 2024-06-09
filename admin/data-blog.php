<?php

require '../login/koneksi.php';

$result = query("SELECT * FROM blog");

if (isset($_POST["cari"])) {
    $result = cari($_POST["keyword"]);
}


?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Blog</title>
</head>

<body>

    <nav class="nav-head navbar navbar-expand-lg">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">Technology</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">

                    <li class="nav-item">
                        <a class="nav-link active" href="#">Data User</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Data Blog</a>
                    </li>


                </ul>
                <form class="d-flex" role="search" method="post">
                    <input class="form-control  me-2" name="keyword" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-dark" name="cari" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <h2>Halaman Admin</h2>

                    <br />
                    <div class="card-header">
                        DATA BLOG
                    </div>
                    <div class="card-body">
                        <a href="blog/tambah-blog.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                        <table class="table table-bordered" id="myTable">
                            <thead>
                                <tr>
                                    <th scope="col-2">Gambar</th>
                                    <th scope="col-2">Judul</th>
                                    <th scope="col-2">Desk</th>
                                    <th scope="col-2">Isi</th>
                                    <th scope="col-2">Penulis</th>
                                    <th scope="col">Aksi</th>
                                </tr>
                            </thead>
                            <tbody>

                                <?php foreach ($result as $res) : ?>
                                    <tr>
                                        <td><img src="../img/<?= $res['gambar']; ?>" width="120px" height="150px" class="object-fit-cover" alt=""></td>
                                        <td><?= $res['judul']; ?></td>
                                        <td><?= $res['desk']; ?></td>
                                        <td class="overflow-auto col-2">
                                            <p class="" style="height: 80px;">
                                                <?= $res['isi']; ?>
                                            </p>
                                        </td>
                                        <td><?= $res['penulis']; ?></td>
                                        <td class="text-center">
                                            <a href="blog/edit-blog.php?id=<?= $res['id']; ?>" class="btn btn-sm btn-primary">EDIT</a>
                                            <a href="blog/hapus-blog.php?id=<?= $res['id']; ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>

                                    </tr>
                                <?php endforeach; ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>