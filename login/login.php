<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  
  <style>
    .card-login {
      background: rgba( 255, 255, 255, 0.25 );
box-shadow: 0 8px 32px 0 rgba( 31, 38, 135, 0.37 );
backdrop-filter: blur( 4px );
-webkit-backdrop-filter: blur( 4px );
border-radius: 10px;
border: 1px solid rgba( 255, 255, 255, 0.18 );
    }

    .bg {
      background-color: #A9927D;
    }
    .btn-login{
      background-color: #A9927D;
    }
    .btn-login:hover{
      background-color: #5E503F;
    }
  </style>
</head>
<body class="bg">

<div class="container ">
  <div class="row justify-content-center">
    <div class=" col-lg-4 col-md-4 card-login m-4 p-4">

      <br>
      <!-- cek pesan notifikasi -->
      <?php 
      if(isset($_GET['pesan'])){
        if($_GET['pesan'] == "gagal"){
          echo "Login gagal! username dan password salah!";
        } else if($_GET['pesan'] == "logout"){
          echo "Anda telah berhasil logout";
        } else if($_GET['pesan'] == "belum_login"){
          echo "Anda harus login untuk mengakses halaman admin";
        }
      }
      ?>
      <h2 class="text-white text-center">Login</h2>
      <br>
      <form method="POST" action="cetak_login.php">
        <div class="mb-3">
          <label for="username" class="form-label">Username</label>
          <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username">
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password">
        </div>
        <button type="submit" class="btn btn-login text-white">LOGIN</button>
      </form>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
