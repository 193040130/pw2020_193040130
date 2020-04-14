<?php 

require 'php/functions.php';


$apparel = query("SELECT * FROM apparel")
?>


<!doctype html>
<html lang="en">
<head>
 
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Bilbo+Swash+Caps&display=swap');
  </style> 
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <title>LATIHAN5c</title>
  <body>

    <!-- navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
      <div class="container">
        <a class="navbar-brand  " href="#">BLINKSTORE.ID</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="#">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="#">Catalog</a>
            <a class="nav-item nav-link" href="#">Pre-Order</a>
            <a class="nav-item nav-link" href="#">Location</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <div class="container">
      <?php foreach ($apparel as $apparel2) : ?>
        <tr>
          <td><img src="assets/img/<?= $apparel2["Photo"]; ?>" height="100px"></td>
          <td><?= $apparel2["Price"]; ?></td>
        </tr>
        <p class="cover">
          <a href="php/detail.php?id=<?= $apparel2['id'] ?>" >
            <?= $apparel2['Type'] ?>
          </a>
        </p>
        
      <?php endforeach; ?>
      
    </div> 
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
