<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_film'])){
	
	$delete_id = $_GET['delete_film'];
	
	$delete_film = "delete from filmovi where filmovi_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_film); 
	
	if($run_delete){
	
	echo "<script>alert('Uspješno ste izbrisali film!')</script>";
	echo "<script>window.open('filmovi.php','_self')</script>";
	}
	
	}
?>