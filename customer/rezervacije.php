<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>

<br>
<br>
<br>

<div class="col-md-12"> 

<table width="795" align="center" class="table table-bordered table-hover"> 

	<tr align="center" bgcolor="skyblue">
		<th>R. Broj</th>
		<th>Film</th>
		<th>Datum rezervacije</th>
		<th>Datum projekcije</th>
	</tr>

<?php 
include("includes/db.php");
	$user = $_SESSION['customer_email'];
	$get_customer = "select * from customers where customer_email='$user' ";
	$run_customer = mysqli_query ($con, $get_customer);
	$row_customer = mysqli_fetch_array($run_customer);
	$customer_email = $row_customer['customer_email'];
	$customer_name = $row_customer['customer_name'];
	$customer_id = $row_customer['customer_id'];
	
	
	$get_rezervacije = "select * from rezervacije where customer_id=$customer_id";
	
	$run_rezervacije = mysqli_query($con, $get_rezervacije);
	
	$i = 0;
	
	while ($row_rezervacije=mysqli_fetch_array($run_rezervacije)){
		
		$rezervacije_id = $row_rezervacije['rezervacije_id'];
		$filmovi_id = $row_rezervacije['filmovi_id'];
		$customer_id = $row_rezervacije['customer_id'];
		$filmovi_datum_p = $row_rezervacije['filmovi_datum_p'];
		$filmovi_datum_r = $row_rezervacije['filmovi_datum_r'];
		$i++;
		
		$get_filmovi = "select * from filmovi where filmovi_id='$filmovi_id'";
		$run_filmovi = mysqli_query($con, $get_filmovi); 
		
		$row_filmovi=mysqli_fetch_array($run_filmovi); 
		
		$filmovi_id = $row_filmovi['filmovi_ime']; 
		
?>
	
	<tr align="center" bgcolor="skyblue">
		<td><?php echo $i;?>.</td>
		<td><?php echo $filmovi_id?> </td>
		<td><?php echo $filmovi_datum_p?></td>
		<td><?php echo $filmovi_datum_r?></td>
	</tr>

	<?php } ?>
</table>
</div>


<?php include ("podnozije2.php"); ?>
