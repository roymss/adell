<?php

//include koneksi database
include('../config/koneksi.php');

//get data dari form
$nama_user = $_POST['nama_user'];
$email_user = $_POST['email_user'];
$alamat_user = $_POST['alamat_user'];
$password_user = $_POST['password_user'];

//query insert data ke dalam database
$query = "INSERT INTO tbl_user (nama_user, email_user, alamat_user, password_user) VALUES ('$nama_user', '$email_user', '$alamat_user', '$password_user')";

//kondisi pengecekan apakah data berhasil dimasukkan atau tidak
if($connection->query($query)) {

    //redirect ke halaman index.php 
    header("location: ../index.php");

} else {

    //pesan error gagal insert data
    echo "Data Gagal Disimpan!";

}

?>