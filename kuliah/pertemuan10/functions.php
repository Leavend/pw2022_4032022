<?php

function Koneksi()
{
  return mysqli_connect('localhost', 'root', '', 'pw_043040023');
}

function query($query)
{

  $db = Koneksi();

  $result = mysqli_query($db, $query);

  // jika hasilnya hanya 1 data 
  if (mysqli_num_rows($result) == 1) {
    return mysqli_fetch_assoc($result);
  }

  $rows = [];
  while ($row = mysqli_fetch_assoc($result)) {
    $rows[] = $row;
  }

  return $rows;
}
