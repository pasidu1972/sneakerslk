<?php

session_start();

if (isset($_SESSION["a"])) {

?>

  <!DOCTYPE html>
  <html lang="en" data-bs-theme="light">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>sneakers LK-ADMIN</title>
    <link rel="icon" href="resources/Img/logo.png">
  </head>

  <body class="adminBody">
    <!-- navbar -->
    <?php include "adminNavBar.php";  ?>
    <!-- navbar -->

    <div class="col-10">
      <h2 class="text-center">
      <img class="me-3" src="Resources/img/statistics.png" height="70" >  
      Reports</h2>

      <div class="row mt-5">

        <div class="col-4 mt-5">
        <a href="adminReportStock.php"><button class="btn btn-outline-info col-12">Stock Report</button></a>
        </div>

        <div class="col-4 mt-5">
        <a href="adminReportProduct.php"><button class="btn btn-outline-info col-12">Product Report</button></a>
        </div>

        <div class="col-4 mt-5">
        <a href="adminReportUser.php"><button class="btn btn-outline-info col-12">User Report</button>
        </div>

      </div>
    </div>



    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>

  </html>

<?php

} else {
  header('Location: http://localhost/online%20store/adminSignIn.php');
  exit();
}

?>