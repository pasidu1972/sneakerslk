<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="bootstrap.css" />
  <title>sneakers LK</title>
    <link rel="icon" href="resources/Img/logo.png">
</head>

 <!-- navbar -->
 <?php include "navBar.php";  ?>
  <!-- navbar -->


<body class="adminsignInbody">

  <div class="adminSignIn_Box">

    <h2 class="text-center">
    <img class="me-3" src="Resources/Img/admin1l.png" height="55" >   
    Admin Login</h2>

    <div class="mt-3">
      <label for="form-label">Username :</label>
      <input type="text" class="form-control bg-transparent border-dark" placeholder="Ex:Sahan" id="un"/>
    </div>

    <div class="mt-3 mb-3">
      <label for="form-label">Password :</label>
      <input type="password" class="form-control bg-transparent border-dark" placeholder="Ex:********" id="pw"/>
    </div>

    <div class="d-none" id="msgDiv">
      <div class="alert alert-danger" id="msg"></div>
    </div>

    <div class="mt-4">
      <button class="btn btn-secondary col-12" onclick="adminSignIn();">Sign In</button>
    </div>

  </div>

  <script src="script.js"></script>

  
</body>


</html>