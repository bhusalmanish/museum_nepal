<?php 
require_once'php_validation_function.php';


if (isset($_POST['login'])) {

    $err=[];
 // old method of  validation in php
    
    // $err = [];
    // if (isset($_POST['email']) && !empty($_POST['email'] && trim($_POST['email']))) {

    //     $username = $_POST['email'];
    // } else {

    //     $err['user'] = 'Enter the correct Email address';
    // }
    // if (isset($_POST['password']) && !empty($_POST['password']) && trim($_POST['password'])) {

    //     $password = $_POST['password'];
    // } else {
    //     $err['password'] = 'enter the passsword';
    // }
       if(isset($_POST['login'])) {
        if(verifyForm($_POST, 'email')) {
            $email = $_POST['email'];
        } else {
            $err['email'] = 'Enter your valid email';
        }

        if(verifyForm($_POST, 'password')) {
            $password = $_POST['password'];
        } else {
            $err['password'] = 'Enter your password';
        }


    // check  USER 
    if (count($err) == 0) {
  


        // check login info  from database:
        try{
            $db_name = 'db_museum_nepal';
            $db_host='localhost';
            $db_username='root';
            $db_password='';
          
            $con = mysqli_connect($db_host, $db_username, $db_password, $db_name);
           
            // encript passwword 
            // $encPassword = md5($password); 
            $login_sql= "select * from tbl_user where  email='".$email."' and password='".$password."'";
            $login_check=  mysqli_query($con,$login_sql);

            //debugging
            // print($username);
            // print($password);
            //  print_r($login_sql);
            //  print_r($login_check);



    
           if (mysqli_num_rows($login_check)==1){
            //    fetch data to  $user
            $user = mysqli_fetch_assoc($login_check);

             session_start();
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email']= $email;


            
           
            
           
           
           if(isset($_POST['remember'])) {
            // Set Cookie to store data

            setcookie('name', $_SESSION['name'], time() + (7 * 24 * 60 * 60)); 
            setcookie('id', $user['id'], time() + (7 * 24 * 60 * 60)); 
           }
               // Redirect to home page
               header('location:homepage.php');

         
        
           }else {
        $err['login'] = 'No users found';
              }
        } catch(Exception $e) {
       die('Database connection error' . '<br>' . $e -> getMessage());
    }

}



       
       
    }

    }
 
?>

<div class="center">
    <div class="container" id="container1"> 
        <label for="show" class="close-btn" onclick="toggleL()" id="cross"><i class="fa fa-times" aria-hidden="true"></i></label>
        <div class="text">Login Form</div> 
        <!--  $_SERVER['PHP_SELF']?> -->
        <form action="login.php" method="post"  id='loginform' >
            <div class="data">
                <label for="Email">Email</label>
                <!-- <span id="erremail"></span>
                <span name="err_email"> 
                   
                    <?php if(isset($err['email'])) {
                        echo $err['email'];
                    }  ?> -->

                <input type="email" name='email' >
            </div>

            <div class="space"> </div>
            <div class="data">
                <label for="Password">Password</label>
                <span name="err_password" id='errpassword'>
                    <?php if (isset($err['password'])) {
                        echo $err['password'];
                    }  ?>

                </span>

                <input type="password" name="password" >
                <div class="space"> </div>
                </div>
                <div class="forget"><a href="#">Forget password?</a></div>
                <input type="checkbox" name='remember'  id="remembertxt" > <span >Remember Me</span> 
               
            
            <div class="btn">
                <button type="submit"  name="login">Login</button>
                <div class="signup"  name="signup" onclick="link()">Not a member?<a href="#"> Register now</a></div>
                <div class="space"> </div>
                <div class="space"> </div>
            </div>


            <!-- php validation error  -->
            <?php 
            $err=[];
            echo checkError($err, 'login'); ?>
            <?php
                if(isset($_GET['msg']) && $_GET['msg'] == 1) {
                    echo '<b><span class="error">Please login to continue.</span></b>';
                } else if(isset($_GET['msg']) && $_GET['msg'] == 2) {
                    echo '<b><span class="success">Logout successful.</span></b>';
                } else if(isset($_GET['msg']) && $_GET['msg'] == 3) {
                    echo '<b><span class="error">  </span></b>';
                }
            ?>

        </form>
    </div>
</div>

<!--  err message red css -->
<style type="text/css">
		.red-border{
			border: 1px solid red;
		}
		label.error{
			color: red;
		}
	</style>


<!-- ajax vlidation in login form -->
<script>
   // starting of jquery
$(document).ready(function() {

// jquery     validation
$('#loginform').validate({

    rules: {
        email: {
            required: true,
            minlength: 6

        },
        password: {
            required: true,
            minlength: 6
        }

    },
    messages: {
        email: {
            required: " email must required",
            minlength: " email show  be valid"


        },
        password: {
            required: " Enter password",
            minlength: "password should be at least 8 character"

        }

    }
});

//ajax user email password check 






}); 
</script>