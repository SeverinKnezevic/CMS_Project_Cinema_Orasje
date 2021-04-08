<?php 
	include("includes/db.php"); 
	
	if(isset($_GET['delete_rezervacije'])){
	
	$delete_id = $_GET['delete_rezervacije'];
	
	$delete_rezervacije = "delete from rezervacije where rezervacije_id='$delete_id'"; 
	
	$run_delete = mysqli_query($con, $delete_rezervacije); 
	
	if($run_delete){
	
	
	echo "<script>window.open('rezervacije.php','_self')</script>";
	}
	
	}
?>