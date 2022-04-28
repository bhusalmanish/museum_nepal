

<?php 
require_once'session_check.php';
require_once'include/db.php';
// $con= $mysqli_connect( DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME);
require'php_validation_function.php';
?>

 <?php
//  require_once"session_check.php"; 
 
 
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
<!-- 
    <link rel="stylesheet" href="css/homepage.css">

    <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/dist/jquery.validate.min.js"></script>
<script src="js/toggle_work.js"></script>
    <script src="js/homepage.js"></script> -->

</head>
<body  class="img" >
    <div class="homepage" id="home">
        <div>
            <nav class="nav-bar sticky">
                <div class="logo">
                    <a href="homepage.php"><img src="img/logo.png" alt=""></a>
                </div>
                <ul class="primary_navigation">
                    <li><a href="#"><i class="bi bi-house-door-fill"></i>Home</a></li>
                    <li><a href="#" onclick="toggleTB()"><i class="bi bi-ticket-fill"></i>Ticket</a></li>
                    <li><a  href="#" onclick="toggleL()" ><i class="bi bi-bell-fill"></i>Notice</a></li>
                </ul>
            
                    
                    
                          <ul class="secondary_navigation">
                    <li><a href="#" onclick="myFunction()"> <?php  echo "manish"?></a></li>
                    <li><a href="logout.php"  >Logout</a></li>
                </ul>

                
        
                </ul>
            </nav>
        </div>
        
        <?php 
       //    echo $_SESSION['name'];?> 
     


        <br>

        <br><b>
   
     </b>        
       <?php require_once "museum_info.php"; ?>

       </div>


        <!-- ticket  booking -->
      <?php  require_once'ticketbooking.php'?>

    <!-- continue to payment -->

   <?php require_once'ticket_payment.php' ?>
   


     <!--  ticket final -->
  <?php require_once'ticket_final.php' ?>
   

   <!-- notice -->
    <?php require_once'notice1.php' ?> 





    
     

    

      
        


       
       

    </body>


</html>