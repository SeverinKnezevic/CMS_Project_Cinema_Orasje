<?php
session_start();
include('includes/db.php');
?>
<?php include ("zaglavlje.php"); ?>


<br>
<br>
<br>

<div class="col-md-12">
<!-- https://bootsnipp.com/snippets/VEr1B -->
<table width="795" align="center" bgcolor="pink" border="0" class="table table-bordered table-hover"> 

	<tr align="center" bgcolor="skyblue">
		<th>R.Broj</th>
		<th>IP</th>
		<th>Ime</th>
		<th>K. Ime</th>
		<th>E-Mail</th>		
		<th>Lozinka:</th>
		<th>Obriši</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_customer = "select * from customers";
	
	$run_customer = mysqli_query($con, $get_customer); 
	
	$i = 0;
	
	while ($row_customer=mysqli_fetch_array($run_customer)){
		
		$customer_id = $row_customer['customer_id'];
		$customer_ip = $row_customer['customer_ip'];
		$customer_name = $row_customer['customer_name'];
		$customer_email = $row_customer['customer_email'];
		$customer_pass = $row_customer['customer_pass'];
		$customer_username = $row_customer['customer_username'];

		$i++;
	
	?>
	<tr align="center" bgcolor="pink">
		<td><?php echo $i;?>.</td>
		<td><?php echo $customer_ip;?></td>
		<td><?php echo $customer_name;?></td>
		<td><?php echo $customer_username;?></td>
		<td><?php echo $customer_email;?></td>
		<td><code><?php echo $customer_pass;?><code></td>
		
		
		
		<td><a href="brisanje_korisnika.php?delete_customer=<?php echo $customer_id;?>" title="Obriši korisnika!" class="btn btn-danger edit" aria-label="Settings"><i class="glyphicon glyphicon-trash" aria-hidden="true"></i></a></td>
	</tr>
	<?php } ?>

</table>
</div>



<?php include ("podnozije.php"); ?>
