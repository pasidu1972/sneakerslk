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
      <h2 class="text-center mt-5">Product Management</h2>

      <div class="row mt-3">
        <!-- Brand Management -->
        <div class="col-4 offset-1 mt-4">

          <label for="form-label"><b>Brand Name:</b></label>
          <input type="text" class="form-control mb-3 mt-2" id="brand"/>

          <div class="d-none" id="msgDiv1" onclick="reload();">
            <div class="alert alert-danger" id="msg1"></div>
          </div>

          <div class="mt-4">
            <button class="btn btn-outline-light col-12" onclick="brandReg();" style="background-color:#595F5A;">Brand Register</button>
          </div>
        </div>
        <!-- Brand Management -->

        <!-- Category Management -->
        <div class="col-4 offset-2 mt-4">

          <label for="form-label"><b>Category:</b></label>
          <input type="text" class="form-control mb-3 mt-2" id="cat"/>

          <div class="d-none" id="msgDiv2" onclick="reload();">
            <div class="alert alert-danger" id="msg2"></div>
          </div>

          <div class="mt-4">
            <button class="btn btn-outline-light col-12" onclick="categoryReg();"style="background-color:#595F5A;">Category Register</button>
          </div>
        </div>
        <!-- Category Management -->
      </div>

      <div class="row mt-5">
        <!-- Color Management -->
        <div class="col-4 offset-1 mt-4">

          <label for="form-label"><b>Color:</b></label>
          <input type="text" class="form-control mb-3 mt-2" id="color" />

          <div class="d-none" id="msgDiv3" onclick="reload();">
            <div class="alert alert-danger" id="msg3"></div>
          </div>

          <div class="mt-4">
            <button class="btn btn-outline-light col-12" onclick="colorReg();"style="background-color:#595F5A;">Color Register</button>
          </div>
        </div>
        <!-- Color Management -->

        <!-- Size Management -->
        <div class="col-4 offset-2 mt-4">

          <label for="form-label"><b>Size:</b></label>
          <input type="text" class="form-control mb-3 mt-2" id="size"/>

          <div class="d-none" id="msgDiv4" onclick="reload();">
            <div class="alert alert-danger" id="msg4"></div>
          </div>

          <div class="mt-4">
            <button class="btn btn-outline-light col-12" onclick="sizeReg();" style="background-color:#595F5A;">Size Register</button>
          </div>
        </div>
        <!-- Size Management -->
      </div>

    </div>






    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
  </body>
<!-- footer -->
<div class="fixed-bottom col-12">
      <img class="me-3" src="Resources/Img/sneaker2.png" height="55" style="margin-left: 580px;" >  
    &copy; 2024 sneakersLK.com || All Right Reserved.</p>
    
    </div>
    <!-- footer -->
  </html>

<?php

} else {
  header('Location: http://localhost/online%20store/adminSignIn.php');
  exit();
}

?>