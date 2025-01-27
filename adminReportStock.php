<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

  $rs = Database::search("SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` ORDER BY `stock`.`stock_id` ASC");
  $num = $rs->num_rows;

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>sneakers LK- stock report </title>
    <link rel="icon" href="resources/Img/logo.png">
  </head>

  <body>

    <div class="container mt-3">
      <a href="adminReport.php"><img src="Resources/Img/Image20240528131631.png" height="25" /></a>
    </div>

    <div class="container mt-3">
      <h2 class="text-center">
      <img class="me-3" src="Resources/Img/re.png" height="50" >  
      Stock Report</h2>
      <table class="table table-hover mt-5">
        <thead>
          <tr>
            <th>Stock Id</th>
            <th>Product Name</th>
            <th>Stock Qty</th>
            <th>Unit Price</th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i = 0; $i < $num; $i++) {
            $d = $rs->fetch_assoc();
          ?>
            <tr>
              <td><?php echo $d["stock_id"] ?></td>
              <td><?php echo $d["name"] ?></td>
              <td><?php echo $d["qty"] ?></td>
              <td><?php echo $d["price"] ?></td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>

    <div class="d-flex justify-content-end container mt-5 mb-5">
      <button class="btn btn-outline-primary col-2" onclick="window.print()">Print</button>
    </div>

  </body>

  </html>

<?php

} else {
  header('Location: http://localhost/online%20store/adminSignIn.php');
  exit();
}

?>