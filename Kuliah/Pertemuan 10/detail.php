<?php
require 'functions.php';


$id = $_GET['id'];

$mhs = query("SELECT * FROM mahasiswa WHERE id = $id");

?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
  body {
    background-color:blue;
    color:
  }

  h2 {
   text-align: center;
 }
</style>
<title>Detail Mahasiswa</title>
</head>

<body>
 <h2>DETAIL MAHASISWA</h2>
 <table>
  <tr>
   <li><img src="img/<?= $mhs['gambar']; ?>" style="width: 500px;"></li>
   <li>NRP : <?= $mhs['nrp']; ?></li>
   <li>Nama : <?= $mhs['nama']; ?></li>
   <li>Email : <?= $mhs['Email']; ?></li>
   <li>Jurusan : <?= $mhs['jurusan']; ?></li>
   <li><a href="">Ubah</a> | <a href="">Hapus</a></li>
   <li><a href=" latihan3.php">Kembali ke dafta mahasiswa</a></li>
 </tr>
</table>
</body>

</html>