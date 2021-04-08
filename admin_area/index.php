
<?php 
session_start(); 
include('includes/db.php');
if(!isset($_SESSION['user_email'])){
	
	echo "<script>window.open('login.php?not_admin=You are not an Admin!','_self')</script>";
}
else {
?>
<?php include ("zaglavlje.php"); ?>
<?php include ("podnozije.php"); ?>
<?php } ?>