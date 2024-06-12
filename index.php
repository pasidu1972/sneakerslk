<?php

include "connection.php";
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

<body onload="loadProduct(0);">
  <!-- navbar -->
  <?php include "navBar.php";  ?>
  <!-- navbar -->
<br>
<br>
<br>
  <!-- basic search -->
  <div class="container d-flex justify-content-end mt-5" >
    <div class="col-3 mt-3" >
      <input type="text" class="form-control" placeholder="Product Name" id="product" onkeyup="searchProduct(0);"/>
    </div>
    <button class="btn btn-outline-info col-1 ms-2 mt-3" onclick="viewFilter();">Filters</button>
  </div>
  <!-- basic search -->

  <!-- advanced search -->
  <div class="d-none" id="filterId">
    <div class="border border-light mt-4 p-5 col-10 offset-1 rounded-4">

      <div class="row col-12">

        <div class="row col-6 ms-auto">
          <label class="form-label col-3">Color:</label>
          <select class="form-select bg-light col-9" id="color">
            <option value="0">Select Color</option>
            <?php 
            $rs = Database::search("SELECT * FROM `color`");
            $num = $rs->num_rows;

            for ($x = 0; $x < $num; $x++) {
              $d = $rs->fetch_assoc();
            ?>
              <option value="<?php echo ($d["color_id"]); ?>"><?php echo ($d["color_name"]); ?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="row col-6 ms-auto">
          <label class="form-label col-3">Category:</label>
          <select class="form-select bg-light col-9" id="cat">
            <option value="0">Select Category</option>
            <?php 
            $rs2 = Database::search("SELECT * FROM `category`");
            $num2 = $rs2->num_rows;

            for ($x = 0; $x < $num2; $x++) {
              $d2 = $rs2->fetch_assoc();
            ?>
              <option value="<?php echo ($d2["cat_id"]); ?>"><?php echo ($d2["cat_name"]); ?></option>
            <?php
            }
            ?>
          </select>
        </div>

      </div>

      <div class="row col-12 mt-4">

        <div class="row col-6 ms-auto">
          <label class="form-label col-3">Brand:</label>
          <select class="form-select bg-light col-9" id="brand">
            <option value="0">Select Brand</option>
            <?php 
            $rs3 = Database::search("SELECT * FROM `brand`");
            $num3 = $rs3->num_rows;

            for ($x = 0; $x < $num3; $x++) {
              $d3 = $rs3->fetch_assoc();
            ?>
              <option value="<?php echo ($d3["brand_id"]); ?>"><?php echo ($d3["brand_name"]); ?></option>
            <?php
            }
            ?>
          </select>
        </div>

        <div class="row col-6 ms-auto">
          <label class="form-label col-3">Size:</label>
          <select class="form-select bg-light col-9" id="size">
            <option value="0">Select Size</option>
            <?php 
            $rs4 = Database::search("SELECT * FROM `size`");
            $num4 = $rs4->num_rows;

            for ($x = 0; $x < $num4; $x++) {
              $d4 = $rs4->fetch_assoc();
            ?>
              <option value="<?php echo ($d4["size_id"]); ?>"><?php echo ($d4["size_name"]); ?></option>
            <?php
            }
            ?>
          </select>
        </div>

      </div>

      <div class="mt-5 row col-12 m-auto">
        <div class="col-5">
        <input type="text" class="form-control" placeholder="Min Price" id="min"/>
        </div>
        <div class="col-5">
        <input type="text" class="form-control" placeholder="Max Price" id="max"/>
        </div>
        <button class="btn btn-outline-dark col-2" onclick="advSearchProduct(0);">Search</button>
      </div>

    </div>
  </div>
  <!-- advanced search -->


  <!-- load product -->
  <div class="row col-10 offset-1" id="pid">
    


  </div>
  <!-- load product -->






 <!-- footer -->
 <div class="col-12 mt-3">
    
    <p class="text-center">
    <img class="me-3" src="Resources/Img/sneaker2.png" height="55" style="margin-left: 150px;" >  
    &copy; 2024 sneakersLK.com || All Right Reserved.</p>
    
  </div>
  <!-- footer -->

  <script src="script.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>

