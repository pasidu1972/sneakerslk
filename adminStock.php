<?php

session_start();
include "connection.php";

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

  <body>

    <!-- navbar -->
    <?php include "adminNavBar.php";  ?>
    <!-- navbar -->

    <!-- Product Register -->
    <div class="adminBody" id="stockMan">
      <div class="row col-12 mt-5" id="signUpBox">
        <div class="row col-5 offset-1">

          <h3 class="text-center">Product Registation</h3>

          <div class="mt-3">
            <label class="form-label" for="pname">Product Name</label>
            <input id="pname" type="text" class="form-control" required />
          </div>

          <!-- <div class="row"> -->

            <div class="mt-3 col-6">
              <label class="form-label" for="brand">Brand</label>
              <select class="form-select" id="brand">
                <option value="0">Select</option>

                <?php

                $rs = Database::search("SELECT * FROM `brand`");
                $num = $rs->num_rows;

                for ($x = 0; $x < $num; $x++) {
                  $data = $rs->fetch_assoc();
                ?>
                  <option value="<?php echo ($data["brand_id"]); ?>"><?php echo ($data["brand_name"]); ?></option>
                <?php
                }

                ?>

              </select>
            </div>

            <div class="mt-3 col-6">
              <label class="form-label" for="cat">Category</label>
              <select class="form-select" id="cat">
                <option value="0">Select</option>

                <?php

                $rs = Database::search("SELECT * FROM `category`");
                $num = $rs->num_rows;

                for ($x = 0; $x < $num; $x++) {
                  $data = $rs->fetch_assoc();
                ?>
                  <option value="<?php echo ($data["cat_id"]); ?>"><?php echo ($data["cat_name"]); ?></option>
                <?php
                }

                ?>

              </select>
            </div>

            <div class="mt-3 col-6">
              <label class="form-label" for="color">Color</label>
              <select class="form-select" id="color">
                <option value="0">Select</option>

                <?php

                $rs = Database::search("SELECT * FROM `color`");
                $num = $rs->num_rows;

                for ($x = 0; $x < $num; $x++) {
                  $data = $rs->fetch_assoc();
                ?>
                  <option value="<?php echo ($data["color_id"]); ?>"><?php echo ($data["color_name"]); ?></option>
                <?php
                }

                ?>

              </select>
            </div>

            <div class="mt-3 col-6">
              <label class="form-label" for="size">Size</label>
              <select class="form-select" id="size">
                <option value="0">Select</option>

                <?php

                $rs = Database::search("SELECT * FROM `size`");
                $num = $rs->num_rows;

                for ($x = 0; $x < $num; $x++) {
                  $data = $rs->fetch_assoc();
                ?>
                  <option value="<?php echo ($data["size_id"]); ?>"><?php echo ($data["size_name"]); ?></option>
                <?php
                }

                ?>

              </select>
            </div>

          

          <div class="mt-3">
            <label class="form-label" for="desc">Description</label>
            <input type="text" class="form-control" id="desc" required />
          </div>

          <div class="mt-3">
            <label class="form-label" for="">Product Image</label>
            <input type="file" class="form-control" id="img">
          </div>

          <div class="d-flex justify-content-center mt-3 mb-5">
            <button class="btn btn-secondary col-12" onclick="regProduct();">Register Product</button>
          </div>

        </div>
        <!-- Product Register -->

        <!-- Stock Update -->
        <div class="row col-5">
          <h3 class="text-center">Stock Update</h3>

          <div class="mt-3 col-10 offset-1">
            <label class="form-label" for="selectProduct">Product Name</label>
            <select class="form-select" id="selectProduct">
              <option value="0">Select</option>
              <?php
              $rs = Database::search("SELECT * FROM `product`");
              $num = $rs->num_rows;

              for ($x = 0; $x < $num; $x++) {
                $data = $rs->fetch_assoc();
                ?>
                  <option value="<?php echo ($data["id"]); ?>"><?php echo ($data["name"]); ?></option>
                <?php
              }
              ?>
            </select>
          </div>

          <div class="mt-2 col-10 offset-1">
            <label class="form-label" for="">Qty</label>
            <input type="text" class="form-control" id="qty" required />
          </div>

          <div class="mt-2 col-10 offset-1">
            <label class="form-label" for="">Unit Price</label>
            <input type="text" class="form-control" id="uprice" required />
          </div>

          <div class="mt-2 col-10 offset-1">
            <button class="btn btn-secondary col-12" onclick="updateStock();">Update Stock</button>
          </div>

        </div>
        <!-- Stock Update -->

      </div>

    </div>
    


    <!-- footer -->
<div class="fixed-bottom col-12">
      <img class="me-3" src="Resources/Img/sneaker2.png" height="55" style="margin-left: 580px;" >  
    &copy; 2024 sneakersLK.com || All Right Reserved.</p>
    
    </div>
    <!-- footer -->



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