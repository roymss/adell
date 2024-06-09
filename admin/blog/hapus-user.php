<?php

include('../config/koneksi.php');

//get id
$id = $_GET['id'];

$query = "DELETE FROM tbl_user WHERE id_user = '$id'";

if($connection->query($query)) {
    header("location: ../index.php");
} else {
    echo "DATA GAGAL DIHAPUS!";
}

?>