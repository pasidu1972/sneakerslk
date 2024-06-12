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

  <body class="adminBody" onload="loadUser();">

    <!-- navbar -->
    <?php include "adminNavBar.php";  ?>
    <!-- navbar -->

    <div class="col-10">
      <h2 class="text-center">User Management</h2>

      <div class="d-none" id="msgDiv" onclick="reload(); ">
        <div class="alert alert-danger" id="msg"></div>
      </div>

      <div class="row d-flex justify-content-end mt-4">

        <div class="col-2">
          <input type="text" class="form-control" placeholder="User Id" id="uid" />
        </div>

        <button class="btn btn-outline-light col-2" onclick="updateUserStatus();" style="background-color:#595F5A;">Change Status</button>

      </div>

      <div class="mt-3">
        <table class="table table-hover">
          <thead>
            <tr>
              <th scope="col">User Id</th>
              <th scope="col">First Name</th>
              <th scope="col">Last Name</th>
              <th scope="col">Email</th>
              <th scope="col">Mobile</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody id="tb">
            <!-- Table Row -->
            <!-- Table Row -->
          </tbody>
        </table>
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