<?php

require '../config/function.php';

$id = $_GET['id'];

if (isset($_POST["submit"])) {

    if (ubah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil diubah');
            document.location.href = '../data-blog.php'
        </script>
";
    } else {
        echo "
        <script>
            alert('Data gagal ubah');
            document.location.href = '../data-blog.php'
        </script>   
";
    }
}

$blog = query("SELECT * FROM blog WHERE id = $id")[0];




?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Tambah Blog</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-8 offset-md-2">
                <div class="card">
                    <div class="card-header">
                        TAMBAH BLOG
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">

                            <input type="hidden" name="id" value="<?= $blog["id"]; ?>">


                            <div class="form-group">
                                <label>Judul Blog</label>
                                <input type="text" name="judul" placeholder="Masukkan Judul Blog" class="form-control" value="<?= $blog['judul']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Penulis</label>
                                <input type="text" name="penulis" placeholder="Masukkan Nama Penulis" class="form-control" value="<?= $blog['penulis']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="desk" placeholder="Masukkan Deskripsi" class="form-control" value="<?= $blog['desk']; ?>" required>
                            </div>

                            <div class="form-group">
                                <label>Isi</label>
                                <input type="text" class="form-control" name="isi" value="<?= $blog['isi']; ?>" placeholder="Masukkan Isi Blog" required></input>
                            </div>

                            <div class="form-group">
                                <label>Gambar</label>
                                <input type="file" name="gambar" placeholder="Masukkan Gambar" class="form-control">
                            </div>

                            <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>