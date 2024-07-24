<!-- Calling header page-->
<?php
include 'includes/header.php';
$page_title = "Login";

// calling header and nav pages
include 'includes/nav.php';
include 'includes/header.php';

// Calling Connection page
include_once ('includes/connection.php')

?>

<!-- Start of content-->
<div class="container pt-5 pb-5">
    <div class="row">
        <div class="col-sm-3">
    </div> <div class="col-sm-6">
            <h2>Admin login</h2>
            <form class="form-control-lg" action="includes/login_inc.php" method="POST">
                    <div class="form-group row pt-4">
                        <label for="email" class="col-sm-2 col-form-label">E-mail</label>
                        <div class="col-sm-10">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group row pt-4">
                        <label for="password" class="col-sm-2 col-form-label">Password</label>
                        <div class="col-sm-10">
                            <input type="password" name="pwd" class="form-control" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group row pt-5">
                        <div class="col-sm-10">
                            <button class="button" type="submit" name="Login_btn">Log in</button>
                        </div>
                    </div>
                </form>

        </div><div class="col-sm-3">

</div>
    </div>


</div>

<!-- Start of content 2 -->
<div class="container">
    <div class="row">
        <div class="col-sm-1">

        </div>
        <div class="col-sm-10">

</div>
<div class="col-sm-1">

</div>
    </div>


</div>





<!-- Calling footer page-->
<?php
include 'includes/footer.php';
?>