<?php

include "connection.php";

$stockId = $_GET["s"];
// echo($stockId);

if (isset($stockId)) {

  $q = "SELECT * FROM `stock` INNER JOIN `product` ON `stock`.`product_id` = `product`.`id` INNER JOIN `brand` 
  ON `product`.`brand_id` = `brand`.`brand_id` INNER JOIN `color` ON `product`.`color_id` = `color`.`color_id` 
  INNER JOIN `category` ON `product`.`category_id` = `category`.`cat_id` INNER JOIN `size` ON `product`.`size_id` = `size`.`size_id` 
  WHERE `stock`.`stock_id` = '" . $stockId . "'";

  $rs = Database::search($q);
  $d = $rs->fetch_assoc();
  
  ?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <title>sneakers LK</title>
    <link rel="icon" href="resources/Img/logo.png">
</head>

<body>
  <!-- navbar -->
  <?php include "navBar.php";  ?>
  <!-- navbar -->

  <div class="adminBody mt-5">
    <div class="col-8 row shadow-lg p-5 bg-body-tertiary rounded-2 m-auto">
      <div class="col-6">
        <img src="<?php echo $d["path"] ?>" height="300px" width="250px" class="rounded-3 shadow-lg" />
      </div>
      <div class="col-6">
        <h3 class="text-info"><?php echo $d["name"] ?></h3>
        <h5 class="mt-3">Brand : <?php echo $d["brand_name"] ?></h5>
        <h6 class="mt-3">Category : <?php echo $d["cat_name"] ?></h6>
        <h6 class="mt-3">Color : <?php echo $d["color_name"] ?></h6>
        <h6 class="mt-3">Size : <?php echo $d["size_name"] ?></h6>
        <p class="mt-3">Description : <?php echo $d["description"] ?></p>
        <div class="row mt-5">
          <div class="col-3">
            <input type="text" placeholder="Qty" class="form-control" id="qty"/>
          </div>
          <div class="col-7 mt-2">
            <h6 class="text-warning">Available Quantity : <?php echo $d["qty"] ?></h6>
          </div>
        </div>
        <h5 class="mt-3">Price : <?php echo $d["price"] ?></h5>
        <div class="d-flex justify-content-center mt-4">
            <button class="btn btn-outline-primary col-6" onclick="addtoCart(<?php echo $d['stock_id'] ?>, 0);">Add To Cart</button>
            <button class="btn btn-outline-warning col-6 ms-2" onclick="buyNow(<?php echo $d['stock_id'] ?>);">Buy Now</button>
        </div>

      </div>
    </div>
  </div>







  <!-- footer -->
  <div class="col-12 mt-3 ">
    <p class="text-center">&copy; 2024 OnlineStore.lk || All Right Reserved.</p>
  </div>
  <!-- footer -->


  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script type="text/javascript" src="https://www.payhere.lk/lib/payhere.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>
<?php
} else {
  header("location: index.php");
}
?>


