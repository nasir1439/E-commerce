<?php

// require mySQL Connection
require("../database/DB_controller.php");

//   require Product class
require('../database/product.php');

// DBController object 
$db = new DBController();

// product object
$product = new Product($db);

if(isset($_POST['itemid'])){
    $result = $product ->getproduct($_POST['itemid']);
    echo json_encode($result);
}
?>