<?php 

include "connection.php";

$pname = $_POST["p"];
$brand = $_POST["b"];
$cat = $_POST["c"];
$color = $_POST["cl"];
$size = $_POST["s"];
$desc = $_POST["de"];
// $image = $_FILES["i"];

// echo ($pname);

if (empty($pname)) {
    echo("Please Enter Your Product Name");
}else if (strlen($pname) > 30) {
    echo ("Your Product Name Should be less than 30 Characters");
} else if ($brand == "0") {
  echo("Please Select a Brand");
} else if ($cat == "0") {
  echo("Please Select a Category");
} else if (empty($desc)) {
    echo ("Please Enter Your Description");
} else if (strlen($desc) > 100) {
    echo ("Your Description should be less than 100 Characters");
} else if (empty($_FILES["i"])) {
    echo ("Please Upload Your Product Image");
} else {

    $rs = Database::search("SELECT * FROM `product` WHERE `name` = '" . $pname . "'");
    $num = $rs->num_rows;

    if ($num > 0) {
        echo ("Your Product Name is Already Exists");
    } else {
        $path = "Resources/ProductImg//" . uniqid() . ".png";
        move_uploaded_file($_FILES["i"]["tmp_name"], $path);
        // Insert Data
        Database::iud ("INSERT INTO `product` (`name`, `description`, `path`, `brand_id`, `category_id`, `color_id`,`size_id`) 
        VALUES ('" . $pname . "', '" . $desc . "',  '" . $path . "','" . $brand . "', '" . $cat . "', '" . $color . "','" . $size . "')");
    
        echo ("Success");
    }
  
}


?>