<?php

session_start();
include "connection.php";

if (isset($_SESSION["a"])) {

  $rs = Database::search("SELECT * FROM `user` INNER JOIN `user_type` ON `user`.`user_type_id` = `user_type`.`utype_id` ORDER BY `user`.`id` ASC");
  $num = $rs->num_rows;

?>

  <!DOCTYPE html>
  <html lang="en">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="bootstrap.css" />
    <title>sneakers LK-report users </title>
    <link rel="icon" href="resources/Img/logo.png">
  </head>

  <body>

    <div class="container mt-3">
      <a href="adminReport.php"><img src="Resources/Img/Image20240528131631.png" height="25" /></a>
    </div>

    <div class="container mt-3" id="printArea">
      <h2 class="text-center">
      <img class="me-3" src="Resources/Img/re.png" height="50" > 
      User Report</h2>
      <table class="table table-hover mt-5">
        <thead>
          <tr>
            <th>User Id</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Mobile No</th>
            <th>User Type</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <?php
          for ($i = 0; $i < $num; $i++) {
            $d = $rs->fetch_assoc();
          ?>
            <tr>
              <td><?php echo $d["id"] ?></td>
              <td><?php echo $d["fname"] ?></td>
              <td><?php echo $d["lname"] ?></td>
              <td><?php echo $d["email"] ?></td>
              <td><?php echo $d["mobile"] ?></td>
              <td><?php echo $d["type"] ?></td>
              <td><?php 
                    if ($d["status"] == 1) {
                      echo ("Active");
                    } else {
                      echo ("Deactive");
                    }
                    
                  ?>
              </td>
            </tr>
          <?php
          }
          ?>
        </tbody>
      </table>
    </div>

    <div class="d-flex justify-content-end container mt-5 mb-5">
      <button class="btn btn-outline-primary col-2" onclick="printDiv();">Print</button>
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