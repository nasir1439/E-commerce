<?php
ob_start();
//  include header file
    include('header.php');
?>
<?php
// include product file
include('./template/_products.php');

// include top sales 
include('./template/_top-sales.php');
?>

<?php
//  include footer file 
include('footer.php');
?>