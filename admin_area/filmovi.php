<?php
session_start();
include("functions/functions.php");
include('includes/db.php');
?>
<?php include ("zaglavlje.php"); ?>



<br>
<br>
<br>

</div>
<div class="col-md-12">
<table width="795" align="center" class="table table-bordered table-hover"> 
	<tr align="center">
		<td colspan="12"><a href="dodaj_film.php"><button class="btn btn-info">Dodaj film</button></a>
		</td>
	</tr>
	<tr align="center" bgcolor="skyblue">
		<th>R.Broj</th>
		<th>ID</th>
		<th>Naziv filma</th>
		<th>Ocjena</th>
		<th>Slika</th>
		<th>Redatelj</th>
		<th>Glumci</th>
		<th>Datum objave</th>
		<th>Datum projekcije</th>
		<th>Trajanje filma</th>
		<th>Žanr</th>
		<th>Brisanje</th>
	</tr>
	<?php 
	include("includes/db.php");
	
	$get_film = "select * from filmovi";
	
	$run_film = mysqli_query($con, $get_film); 
	
	$i = 0;
	
	while ($row_film=mysqli_fetch_array($run_film)){
		
		$film_id = $row_film['filmovi_id'];
		$film_ime = $row_film['filmovi_ime'];
		$film_sadrzaj = $row_film['filmovi_sadrzaj'];
		$film_ocjena = $row_film['filmovi_ocjena'];
		$film_slika = $row_film['filmovi_slika'];
		$film_redatelj = $row_film['filmovi_redatelj'];
		$film_glumci = $row_film['filmovi_glumci'];
		$film_datum_o = $row_film['filmovi_datum_o'];
		$film_datum_p = $row_film['filmovi_datum_p'];
		$film_trajanje = $row_film['filmovi_trajanje'];
		$film_zanr = $row_film['filmovi_zanr'];
		$i++;
	
	?>
	<tr align="center" bgcolor="gold">
		<td><?php echo $i;?>.</td>
		<td><?php echo $film_id;?></td>
		<td><?php echo $film_ime;?></td>
		<td><?php echo $film_ocjena;?></td>
		<td><img src="filmovi_slika/<?php echo $film_slika;?>" width="60" height="60"/></td>
		<td><?php echo $film_redatelj;?></td>
		<td><?php echo $film_glumci;?></td>
		<td><?php echo $film_datum_o;?></td>
		<td><?php echo $film_datum_p;?></td>
		<td><?php echo $film_trajanje;?></td>
		<td><?php echo $film_zanr;?></td>
		
		<td><a href="brisanje_filma.php?delete_film=<?php echo $film_id;?>" class="btn btn-danger edit" aria-label="Settings">
                <i class="glyphicon glyphicon-trash" aria-hidden="true"></i>
              </a></td>
	
	</tr>
	<?php } ?>
</table>
</div>

<?php include ("podnozije.php"); ?>
