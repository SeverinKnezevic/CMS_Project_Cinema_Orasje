<?php
session_start();
mysqli_connect("localhost","root","","kino");
include("functions/rezervacija.php");
include('includes/db.php');

provjeri_login();
			$user = $_SESSION['customer_email'];
			$get_customer = "select * from customers where customer_email='$user'";
			$run_customer = mysqli_query($con, $get_customer); 
			$row_customer = mysqli_fetch_array($run_customer); 
			$userid = $row_customer['customer_id'];
			 

	if(isset($_POST)){
	$id=$_GET['id'];
	$datum=$_GET['datum'];
	}
	$filmovi_id=$id;
	
	
	$customer_id=$userid;
	
	
	
	
	
	
	
	
	
	
	$filmovi_datum_p=$datum;
	$filmovi_datum_r=date('Y-m-d H:i:s');
	
	dodaj_rezervaciju ($filmovi_id,$customer_id,$filmovi_datum_p,$filmovi_datum_r);
	
	
	header("location:rezervacije.php");
?>