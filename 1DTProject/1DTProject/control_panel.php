<!-- Calling header page-->
<?php
session_start();
//Call protect admin page
include_once 'includes/protect_admin_pages.php';

include 'includes/header.php';
$page_title = "control panel";

// calling header and nav pages
include 'includes/nav.php';
include 'includes/header.php';

// Calling Connection page
include_once ('includes/connection.php')

?>

<!-- Start of content-->
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
        <h2>Control Panel</h2>
        <?php
        if(isset($_SESSION['AdminID'])){
            echo "Welcome Back User:" . $_SESSION['AdminID'];
        }
        ?>
</div>
<div class="col-sm-1">

</div>
    </div>


</div>