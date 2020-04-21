<?php
require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");
?>
<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <style>
  body {
   background-color: white;
   color:
 }

 h2 {
   text-align: center;
 }
</style>
<title>Daftar Mahasiswa</title>
</head>

<body>
 <h2>DAFTAR MAHASISWA</h2>

 <a href="tambah.php">tambah data mahasiswa</a>
 <BR></BR>


 <table border="1" cellpadding="10" cellspacing="0">
  <tr>
   <th>#</th>
   <th>Gambar</th>
   <th>Nama</th>
   <th>Aksi</th>
 </tr>
 <?php $i = 1; ?>
 <?php foreach ($mahasiswa as $mhs) : ?>
   <tr>
    <td><?= $i++; ?></td>
    <td><img src="img/<?= $mhs['gambar']; ?>" width="60"></td>
    <td><?= $mhs['nama']; ?></td>
    <td>
     <a href="detail.php?id=<?= $mhs['id']; ?>">lihat detail</a>
   </td>
 </tr>
<?php endforeach; ?>
</table>



</body>

</html>