<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

  $rs = Database::search("SELECT * FROM `product` INNER JOIN `brand` ON `product`.`brand_id` = `brand`.`brand_id` 
  INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id` 
  INNER JOIN `category` ON `product`.`category_id` = `category`.`cat_id` 
  INNER JOIN `size` ON `product`.`size_id` = `size`.`size_id` 
  ORDER BY `product`.`id` ASC");
  $num = $rs->num_rows;

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>sneakers LK- admin report product</title>
    <link rel="icon" href="resources/Img/logo.png">
  </head>

  <body>
    <div class="container mt-3">
      <a href="adminReport.php"><img src="Resources/Img/Image20240528131631.png" height="25" /></a>
    </div>

    <div class="container mt-3">
      <h2 class="text-center">
      <img class="me-3" src="Resources/Img/re.png" height="50" >  
      Product Report</h2>
      <table class="table table-hover mt-5">
        <thead>
          <tr>
            <th>Product Id</th>
            <th>Product Name</th>
            <th>Brand Name</th>
            <th>Category</th>
            <th>Color</th>
            <th>Size</th>
            <th>Description</th>
            <th>Image</th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i = 0; $i < $num; $i++) {
            $d = $rs->fetch_assoc();
          ?>
            <tr>
              <td><?php echo $d["id"] ?></td>
              <td><?php echo $d["name"] ?></td>
              <td><?php echo $d["brand_name"] ?></td>
              <td><?php echo $d["cat_name"] ?></td>
              <td><?php echo $d["color_name"] ?></td>
              <td><?php echo $d["size_name"] ?></td>
              <td><?php echo $d["description"] ?></td>
              <td><img src="<?php echo $d["path"] ?>" height="75"/></td>
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