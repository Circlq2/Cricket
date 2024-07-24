<?php
//Declaring variable
$page_title = "Admin list";

//Call protect admin page
include_once 'includes/protect_admin_pages.php';

//<!-- Calling header page -->

$page_title = "Admin_list";
include 'includes/header.php';
include 'includes/nav.php';
include 'includes/carousel.php';
include_once('includes/connection.php');

//Create query
$query = "SELECT * FROM admin_tbl";

//run query in the database using built-in php function 
//Pass 2 parameters
$result = mysqli_query($conn, $query);

//Fetch data from database
$admins = mysqli_fetch_all($result, MYSQLI_ASSOC);


//Fress result from database
mysqli_free_result($result);

//Close connection. Pass in $conn variable
mysqli_close($conn)

?>

<div>
<!-- Start of content 1 -->
<div class="container">
    <div class="row">
        <div class="col-sm-1"></div>
        <div class="col-sm-10">
            <h2>Admin List</h2>
            <table class="table">
                <thead>
                <th>ID</th>
                <th>Email</th>
                <th>Password</th>
                <th>Date Registered</th>
                </thead>
                <tbody>
                    <?php
                    foreach ($admins as $admin) : ?>
                    <tr>
                        <td><?php echo $admin['AdminID'];?></td>
                        <td><?php echo $admin['Email']; ?></td>
                        <td><?php echo $admin['Password']; ?></td>
                        <td><?php echo $admin['Datereg']; ?></td>
                        <td><a href="admin_update.php?AdminID=<?php echo $admin['AdminID'];?>">Modify</a></td>
                        <td><a href="admin_update.php?AdminID=<?php echo $admin['AdminID'];?>">Delete</a></td>
                        </tr>
                        </tbody>
                        <!-- close foreach loop -->
                       <?php endforeach; ?>
                        </table>

        </div>
        <div class="col-sm-1">
            
        </div>
    </div>
</div>
</div>

<!-- Calling footer page -->
<?php
include 'includes/footer.php';
?>