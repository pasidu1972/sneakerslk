<?php

include "connection.php";
session_start();
$user = $_SESSION["u"];

if (isset($_SESSION["u"])) {

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
    <title>sneakers LK- user profile</title>
    <link rel="icon" href="resources/Img/logo.png">
  </head>

  <body>
    <!-- navbar -->
    <?php include "navBar.php";  ?>
    <!-- navbar -->

    <div class="adminBody mt-5">
      <div class="row container mt-5">

        <div class="col-4 d-flex justify-content-center flex-column ">

          <div class="d-flex justify-content-center">
            <img src="<?php
                      if (!empty($d["img_path"])) {
                        echo $d["img_path"];
                      } else {
                        echo ("Resources/Img/profile.png");
                      }
                      ?>" height="150px" id="i" />
          </div>

          <div class="mt-3">
            <label for="form-label">Profile Image:</label>
            <input type="file" class="form-control" id="imgUploader" />
          </div>
          <div class="mt-3">
            <button class="btn btn-outline-warning col-12" onclick="uploadImg();">Upload</button>
          </div>
        </div>

        <div class="col-8">
          <h2 class="text-center">Profile Details</h2>
          <div class="row mt-3">
            <div class="col-6">
              <label for="form-label">First Name</label>
              <input type="text" class="form-control" value="<?php echo $d["fname"] ?>" id="fname" />
            </div>
            <div class="col-6">
              <label for="form-label">Last Name</label>
              <input type="text" class="form-control" value="<?php echo $d["lname"] ?>" id="lname" />
            </div>
          </div>
          <div class="mt-3">
            <label for="form-label">Email</label>
            <input type="text" class="form-control" value="<?php echo $d["email"] ?>" id="email" disabled />
          </div>
          <div class="mt-3">
            <label for="form-label">Mobile</label>
            <input type="text" class="form-control" value="<?php echo $d["mobile"] ?>" id="mobile" />
          </div>
          <div class="row mt-3">
            <div class="col-6">
              <label for="form-label">Username</label>
              <input type="text" class="form-control" value="<?php echo $d["username"] ?>" disabled />
            </div>
            <div class="col-6">
              <label for="form-label">Password</label>
              <input type="text" class="form-control" value="<?php echo $d["password"] ?>" id="pw" />
            </div>
          </div>

          <h5 class="mt-3">shipping Address</h5>

          <div class="row mt-3">
            <div class="col-3">
              <label for="form-label">No</label>
              <input type="text" class="form-control" value="<?php echo $d["no"] ?>" id="no" />
            </div>
            <div class="col-9">
              <label for="form-label">Line01</label>
              <input type="text" class="form-control" value="<?php echo $d["line_1"] ?>" id="line1" />
            </div>
            <div>
              <div class="mt-3">
                <label for="form-label">Line02</label>
                <input type="text" class="form-control" value="<?php echo $d["line_2"] ?>" id="line2" />
              </div>
              <div class="mt-3">
                <button class="btn btn-outline-warning col-12" onclick="updateData();">Update</button>
              </div>


            </div>
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
  </body>

  </html>
<?php
} else {
  header("location: signin.php");
}

?>