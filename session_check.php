<?php 

if(!isset($_SESSION['name'])){
	session_start();

  header('location:index.php?msg=session_name_notset');

}

if(isset($_SESSION['name'])){
	// session_start();

  header('location:homepage.php?msg=session_name_set');

}

?>