<?php

require_once'include/db.php';
// $con= $mysqli_connect( DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
require'php_validation_function.php';


if (isset($_COOKIE['name'])) {
    session_start();
    $_SESSION['name'] = $_COOKIE['name'];
    header('location:homepage.php?msg=redirect_to_homepage');

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>museum ticketing system</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
    <script src="https://kit.fontawesome.com/251567a26b.js" crossorigin="anonymous"></script>


    <link rel="stylesheet" href="css/homepage.css">

    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/dist/jquery.validate.min.js"></script>
    <script src="js/toggle_work.js"></script>

    <script src="js/homepage.js"></script>
</head>

<body class="img" >
<div class="homepage" id="home">

    <!-- homepage -->
<!--  nav bar  -->
<?php require_once'navmenu.php'   ?>




<!-- nav bar end -->


        <!-- text area  -->
        <header>
            <div class="header-content">
                <h1>MUSEUM</h1>
                <div class="line"></div>
                <h2>Where past will unroll before your eyes</h2>
                <a href="#visit" class="button">VISIT US TODAY</a>
            </div>
        </header>
     </div>

</div>

 
    <!-- museums -->


    
    <?php require_once "museum_info.php"; ?>
    <!-- login form -->

    <?php require_once "login.php"; ?>
    <!-- register page -->

    <?php  require_once'regsister.php'?>

    <!-- ticket -->
     <!-- require_once'ticketbooking.php'?> -->

    <!-- continue to payment -->

    <!--  require_once'ticket_payment.php' ?> -->


    <!--  ticket final -->
  <!-- require_once'ticket_final.php' ?> -->
   

    <!-- notice -->
    <?php require_once'notice1.php' ?>

</body>

</html>