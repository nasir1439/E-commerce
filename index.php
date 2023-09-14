<?php
ob_start();
//  include header file
    include('header.php');
?>
<?php
    //  include banner area 
    include('./template/_banner-area.php');

    
    // include top sales 
    include('./template/_top-sales.php');
    
    
    //  include spacial price 
    include('./template/_special-price.php');

    
    //  include banner file
    include('./template/_banner-ads.php');
    

      //    include new phones file
    include('./template/_new-phones.php');
    

   //     include blogs file
    include('./template/_blogs.php');    
?> 
<?php
    //  include footer file 
    include('footer.php');
?>
