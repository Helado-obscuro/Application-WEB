<?php 
session_start();
if($_SESSION['user']){	
	session_destroy();
	header("location:principal.php");
}
else{
	header("location:principal.php");
}
?>