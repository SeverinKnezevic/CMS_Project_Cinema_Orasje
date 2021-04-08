<?php
session_start();
include("functions/functions.php");
include('includes/db.php');
?>
<?php include ("zaglavlje2.php"); ?>



<br>
<br>

<div class="col-md-10">





<div id="products_box">


<?php 
	global $con; 
	
	
	$get_film = "select * from filmovi order by RAND() LIMIT 0,6";

	$run_film = mysqli_query($con, $get_film); 
	
	while($row_film=mysqli_fetch_array($run_film)){
	
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
		
	
		echo "
		
				<div class='col-lg-3 col-md-2 col-sm-6 col-xs-12'>
				
					<div class='my-list'>
						<img src='../admin_area/filmovi_slika/$film_slika' alt='slika filma'  />
						<h3><b>$film_ime <b></h3>
						<small> Ocjena: $film_ocjena</small>
						<span class='pull-right'></span>	
						<div class='offer'>Žanr: $film_zanr  ||  Trajanje: $film_trajanje</div>
						<div class='detail'>
							<p><b>$film_sadrzaj</b></p>
							<hr>
							<p>Redatelj: $film_redatelj </p>
							<p>Glumci: $film_glumci </p>
							<p>Datum objave: $film_datum_o </p>
							<p>Datum projekcije: $film_datum_p </p>
						<div class='add'><a href='rezerviraj.php?id=$film_id&datum=$film_datum_p'  class='addtocart' ><button class='btn btn-info' >Rezerviraj</button></a></div>	
						</div>							
					</div>
					
				</div>
		
		
		";
	
	
	} ?>
	
	
</div>
</div>

<?php include ("podnozije2.php"); ?>
