<?php
// require mySQL Connection
require("./database/DB_controller.php");

//   require Product class
require('./database/product.php');

// require cart class
require('./database/cart.php');

// DBController object 
$db = new DBController();

// product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object 
$Cart  = new Cart($db);


?>