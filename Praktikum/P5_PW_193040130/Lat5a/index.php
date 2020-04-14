<?php

$conn = mysqli_connect("localhost","root","") or die("koneksi ke Db gagal");


mysqli_select_db($conn, "pw_193040130") or die("Database salah!");


$result = mysqli_query($conn, "SELECT * FROM apparel");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <title>LATIHAN5a</title>
</head>
<body>
    <div class="container">
        <h1>Blackpink Apparel</h1>
        <table border="" cellpadding="8" cellspacing="0" style="text-align : center " >
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Company</th>
                <th>Type</th>
                <th>Release Date</th>
                <th>Pricelist</th>


            </tr>
            <?php $i = 1 ?>
            <?php while($row = mysqli_fetch_assoc($result)) : ?>
                <tr>
                    <td><?= $i?></td>
                    <td><img src="assets/img/<?= $row["Photo"]; ?>"></td>
                    <td><?= $row["Company"]; ?></td>
                    <td><?= $row["Type"]; ?></td>
                    <td><?= $row["ReleaseDate"]; ?></td>
                    <td><?= $row["Price"]; ?></td>
                    
                </tr>
                <?php $i++?>
            <?php endwhile; ?>
            

        </table>
    </div>
</body>
</html>