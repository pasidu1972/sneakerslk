<?php 

include "connection.php";

$productId = $_POST["p"];
$qty = $_POST["q"];
$price = $_POST["up"];

// echo($productId);

if (empty($qty)) {
  echo ("Please Enter Qty");
}else if (!is_numeric($qty)) {
  echo ("Only Numbers Can be Entered for Qty");
}else if (strlen($qty) > 10) {
  echo ("Your Qty Should be less than 10 Characters");
}else if (empty($price)) {
  echo ("Please Enter Price");
}else if (!is_numeric($price)) {
  echo ("Only Numbers Can be Entered for Price");
}else if (strlen($price) > 10) {
  echo ("Your Price Should be less than 10 Characters");
}else {
  $rs = Database::search("SELECT * FROM `stock` WHERE `product_id` = '" . $productId ."' AND `price` = '" . $price . "'");
  $num = $rs->num_rows;
  $d = $rs->fetch_assoc();

  if ($num == 1) {
    // update Query
    $newQty = $d["qty"]  + $qty;
    Database::iud("UPDATE `stock` SET `qty` = '" . $newQty . "' WHERE `stock_id` = '" . $d["stock_id"] . "'");
    echo ("stock Update Successfully");
  }else {
    // Insert Query
    Database::iud("INSERT INTO `stock` (`price`,`qty`,`product_id`,`status`) VALUES ('" . $price . "','" . $qty . "','" . $productId . "', 1)");
    echo ("New Stock Added Successfully");
  }
}


?>