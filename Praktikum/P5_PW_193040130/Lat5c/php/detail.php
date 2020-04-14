<?php

if(!isset($_GET['id'])) {
  header("location: ../index.php");
  exit;
}

require 'functions.php';

$id = $_GET['id'];

$apparel = query("SELECT * FROM apparel WHERE id = $id")[0];


?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  
  <link rel="stylesheet" type="text/css" href="../css/style.css">

  <title>INFO DETAIL 5C</title>
</head>
<body>

  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-light bg-light">
    <div class="container">
      <a class="navbar-brand" href="#">BLINKSTORE.ID</a>
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
    <div class="card" style="width: 18rem;" >
      <img class="card-img-top" src="../assets/img/<?= $apparel["Photo"]; ?>" alt="Card image cap">
    </div>
    <div class="card-body">
      <p class="card-text"><?= $apparel["id"]; ?></p>
      <p class="card-text"><?= $apparel["Company"]; ?></p>
      <p class="card-text"><?= $apparel["Type"]; ?></p>
      <p class="card-text"><?= $apparel["ReleaseDate"]; ?></p>
      <p class="card-text"><?= $apparel["Price"]; ?></p>
      
    </div>
    
    <button class="tombol-kembali"><a href="../index.php">kembali</a></button>
    
  </div>
</div>


<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>



