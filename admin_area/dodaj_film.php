<?php
session_start();
include("functions/functions.php");
include('includes/db.php');
?>
<?php include ("zaglavlje.php"); ?>


<br>
<br>
<br>

<div class="col-md-12">
<form action="dodaj_film.php" method="post" enctype="multipart/form-data"> 
	<table align="center" width="750"  class="table stats caps">
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Naziv filma:</b></td>
			<td><input type="tex" name="filmovi_ime" size="60" required/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right" ><b>Sadržaj filma:</b></td>
			<td><textarea name="filmovi_sadrzaj" cols="20" rows="10"></textarea></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Ocjena filma:</b></td>
			<td><input type="tex" name="filmovi_ocjena" size="60" required/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Slika filma:</b></td>
			<td><input type="file" name="filmovi_slika" /></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right" ><b>Redatelj filma:</b></td>
			<td><input type="tex" name="filmovi_redatelj" required/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Glumci filma:</b></td>
			<td><input type="tex" name="filmovi_glumci" size="60" required/></td>
		</tr>

		
		<tr bgcolor="skyblue">
			<td align="right"><b>Datum prikazivanja filma:</b></td>
			<td><input type="tex" name="filmovi_datum_p" size="60" required/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Trajanje filma:</b></td>
			<td><input type="tex" name="filmovi_trajanje" size="60" required/></td>
		</tr>
		
		<tr bgcolor="skyblue">
			<td align="right"><b>Žanr filma:</b></td>
			<td><input type="tex" name="filmovi_zanr" size="60" required/></td>
		</tr>
		
		<tr align="center" bgcolor="skyblue">
			<td colspan="7"><input type="submit" class="btn-bs-file btn btn-primary" name="insert_post" value="Dodaj film"/></td>
		</tr>
	
	</table>
</form>
</div>

</body> 
</html>
<?php 

	if(isset($_POST['insert_post'])){
	
		
		$filmovi_ime = $_POST['filmovi_ime'];
		$filmovi_sadrzaj = $_POST['filmovi_sadrzaj'];
		$filmovi_ocjena = $_POST['filmovi_ocjena'];
		
		$filmovi_redatelj = $_POST['filmovi_redatelj'];
		$filmovi_glumci = $_POST['filmovi_glumci'];
		$filmovi_datum_o = $_POST['filmovi_datum_o'];
		$filmovi_datum_p = $_POST['filmovi_datum_p'];
		$filmovi_trajanje = $_POST['filmovi_trajanje'];
		$filmovi_zanr = $_POST['filmovi_zanr'];
		//getting the image from the field
		$filmovi_slika = $_FILES['filmovi_slika']['name'];
		$filmovi_slika_tmp = $_FILES['filmovi_slika']['tmp_name'];
		
		move_uploaded_file($filmovi_slika_tmp,"filmovi_slika/$filmovi_slika");
	
		 $insert_filmovi = "insert into filmovi (filmovi_ime,filmovi_sadrzaj,filmovi_ocjena,filmovi_slika,filmovi_redatelj,filmovi_glumci,filmovi_datum_o,filmovi_datum_p,filmovi_trajanje,filmovi_zanr) values ('$filmovi_ime','$filmovi_sadrzaj','$filmovi_ocjena','$filmovi_slika','$filmovi_redatelj','$filmovi_glumci',NOW(),'$filmovi_datum_p','$filmovi_trajanje','$filmovi_zanr')";
		 
		 $insert_filmovi = mysqli_query($con, $insert_filmovi);
		 
		 if($insert_filmovi){
		 
		 echo "<script>alert('Dodali ste novi film!')</script>";
		 echo "<script>window.open('filmovi.php?dodaj_film','_self')</script>";
		 
		 }
	}

?>
<?php include ("podnozije.php"); ?>