<?php

require '../config/function.php';

if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan');
            document.location.href = '../data-blog.php'
        </script>
";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan');
            document.location.href = '../data-blog.php'
        </script>
";
    }
}



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
                        
                            <div class="form-group">
                                <label>Judul Blog</label>
                                <input type="text" name="judul" placeholder="Masukkan Judul Blog" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Penulis</label>
                                <input type="text" name="penulis" placeholder="Masukkan Nama Penulis" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Deskripsi</label>
                                <input type="text" name="desk" placeholder="Masukkan Deskripsi" class="form-control" required>
                            </div>

                            <div class="form-group">
                                <label>Isi</label>
                                <textarea class="form-control" name="isi" placeholder="Masukkan Isi Blog" required></textarea>
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