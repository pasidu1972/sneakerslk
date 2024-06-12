<?php 

session_start();

if (isset($_SESSION["u"])) {
  $_SESSION["u"] = null;
  session_destroy();

  echo ("Sign Out Succesfully");
}else if (isset($_SESSION["a"])){
  $_SESSION["a"] = null;
  session_destroy();

  echo ("Sign Out Succesfully");
}else{
  echo ("You are not currently Signed In");
}

?>