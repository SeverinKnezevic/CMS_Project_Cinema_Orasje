<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_customer'])){
	
	$delete_id = $_GET['delete_customer'];
	
	$delete_customer = "delete from customers where customer_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_customer); 
	
	if($run_delete){
	
	echo "<script>alert('Korisnik je izbrisan!')</script>";
	echo "<script>window.open('korisnici.php','_self')</script>";
	}
	
	}
?>