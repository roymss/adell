<?php

//include koneksi database
include('../config/koneksi.php');

//get data dari form
$id_user = $_POST['id_user'];
$nama_user = $_POST['nama_user'];
$email_user = $_POST['email_user'];
$alamat_user = $_POST['alamat_user'];
$password_user = $_POST['password_user'];

//query update data ke dalam database berdasarkan ID
$query = "UPDATE tbl_user SET nama_user = '$nama_user', email_user = '$email_user', alamat_user = '$alamat_user', password_user = '$password_user' WHERE id_user = '$id_user'";

//kondisi pengecekan apakah data berhasil diupdate atau tidak
if($connection->query($query)) {
    //redirect ke halaman index.php 
    header("location: ../index.php");
} else {
    //pesan error gagal update data
    echo "Data Gagal Diupate!";
}

?>