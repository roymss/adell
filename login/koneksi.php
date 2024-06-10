<?php

$koneksi = mysqli_connect("localhost", "root", "", "pw2024_tubes_233040140");

function query($query)
{
  global $koneksi;
  $result = mysqli_query($koneksi, $query);
  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }
  return $rows;
}


function cari($keyword)
{
  $query = "SELECT * FROM blog
                WHERE
              judul LIKE '%$keyword%'
            ";
  return query($query);
}
