<?php
ob_start();
//  include header file
    include('header.php');
?>
<?php

    //include cart items if it is not empty 
    count($product->getData('cart')) ? include ('./template/_cart-template.php') :  include ('./template/notfound/_cart_notfound.php');

    // include top sale section 
    count($product->getData('wishlist')) ? include ('./template/_wishlist_template.php') :  include ('./template/notfound/_wishlist_notfound.php');


    // include top sale section 
    include ('./template/_new-phones.php');
?>
<?php
// include footer.php file
include ('footer.php');
?>


