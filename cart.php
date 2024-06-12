<?php

include "connection.php";
session_start();

$user = $_SESSION["u"];

if (isset($user)) {

  $rs = Database::search("SELECT * FROM `user` WHERE `id` = '" . $user["id"] . "'");
  $d = $rs->fetch_assoc();

?>

  <!DOCTYPE html>
  <html lang="en" data-bs-theme="light">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>sneakers LK - cart</title>
    <link rel="icon" href="resources/Img/logo.png">
  </head>

  <body onload="loadCart();">
    <!-- navbar -->
    <?php include "navBar.php";  ?>
    <!-- navbar -->

    <div class="container mt-5">
      <div class="row" id="cartBody">

        <!-- cart load here -->

      </div>
    </div>



    <!-- footer -->
    <div class="col-12 mt-3">
    
      <p class="text-center">
      <img class="me-3" src="Resources/Img/sneaker2.png" height="55" style="margin-left: 150px;" >  
      &copy; 2024 sneakersLK.com || All Right Reserved.</p>
      
    </div>
    <!-- footer -->


    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
  </body>

  </html>

<?php
} else {
  header("location: signin.php");
}

?>