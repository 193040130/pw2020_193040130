<?php 

require 'php/functions.php';

$Apparel = query("SELECT * FROM Apparel")
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>LATIHAN5b</title>
</head>
<body>
    <div class="container">
        <h1>Blackpink Apparel</h1>
        <table border="1" cellpadding="8" cellspacing="0" style="text-align : center " >
            <tr>
                <th>ID</th>
                <th>Photo</th>
                <th>Company</th>
                <th>Type</th>
                <th>Release Date</th>
                <th>Pricelist</th>

            </tr>
            <?php $i = 1 ?>
            <?php foreach ($Apparel as $Apparel2) : ?>
                <tr>
                   <td><?= $i ?></td>
                   <td><img src="assets/img/<?= $Apparel2["Photo"]; ?>"></td>
                   <td><?= $Apparel2["Company"]; ?></td>
                   <td><?= $Apparel2["Type"]; ?></td>
                   <td><?= $Apparel2["ReleaseDate"]; ?></td>
                   <td><?= $Apparel2["Price"]; ?></td>
               </tr>
               <?php $i++?>
           <?php endforeach; ?>
           

       </table>
   </div>
</body>
</html>