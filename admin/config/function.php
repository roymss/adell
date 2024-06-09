<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "pw2024_tubes_233040140";    

$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

function query($query){
    global $connection;
    $result = mysqli_query($connection, $query);
    $rows = [];
    while ($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }
    return $rows;
  }


function tambah($data){

    global $connection;
    $judul = htmlspecialchars($data['judul']);
    $gambar = htmlspecialchars($data['gambar']);
    $desk = htmlspecialchars($data['desk']);
    $isi = htmlspecialchars($data['isi']);
    $penulis = htmlspecialchars($data['penulis']);
  
    $query = "INSERT INTO blog 
                VALUES
                ('0', '$judul', '$gambar', '$desk', '$isi', '$penulis')              
  ";
  
    mysqli_query($connection, $query);
  
    mysqli_affected_rows($connection);
  
  }

  function hapus($id)
{
    global $connection;
    mysqli_query($connection, "DELETE FROM blog WHERE id = $id");
    return mysqli_affected_rows($connection);
}

function ubah($data)
{
    global $connection;
    $id = $data["id"];
    $judul = htmlspecialchars($data["judul"]);
    $gambar = htmlspecialchars($data["gambar"]);
    $desk = htmlspecialchars($data["desk"]);
    $isi = htmlspecialchars($data["isi"]);
    $penulis = htmlspecialchars($data["penulis"]);



    $query = "UPDATE blog SET
                judul ='$judul',
                gambar = '$gambar',
                desk = '$desk',
                isi = '$isi',
                penulis = '$penulis'
              WHERE id = $id  
                ";

    mysqli_query($connection, $query);

    return mysqli_affected_rows($connection);
}


?>