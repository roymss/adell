<?php 
  
  include('../config/koneksi.php');
  
  $id = $_GET['id'];
  
  $query = "SELECT * FROM tbl_user WHERE id_user = $id LIMIT 1";

  $result = mysqli_query($connection, $query);

  $row = mysqli_fetch_array($result);

  ?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <title>Edit user</title>
  </head>

  <body>

    <div class="container" style="margin-top: 80px">
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <div class="card">
            <div class="card-header">
              EDIT user
            </div>
            <div class="card-body">
              <form action="update-user.php" method="POST">
                
                <div class="form-group">
                  <label>Nama User</label>
                  <input type="text" name="nama_user" value="<?php echo $row['nama_user'] ?>" placeholder="Masukkan nma user" class="form-control”>
                  <input type="hidden" name="id_user" value="<?php echo $row['id_user'] ?>">
                </div>

                <div class="form-group">
                  <label>Nama Lengkap</label>
                  <input type="text" name="password_user" value="<?php echo $row['email_user'] ?>" placeholder="Masukkan email user" class="form-control">
                </div>

                <div class="form-group">
                  <label>Alamat</label>
                  <textarea class="form-control" name="alamat_user" placeholder="Masukkan Alamat user" rows="4"><?php echo $row['alamat_user'] ?></textarea>
                </div>

                <div class="form-group">
                  <label>Password</label>
                  <input type="password" name="password_user" value="<?php echo $row['password_user'] ?>" placeholder="Masukkan password user" class="form-control">
                </div>
                
                
                <button type="submit" class="btn btn-success">UPDATE</button>
                <button type="reset" class="btn btn-warning">RESET</button>

              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  </body>
</html>