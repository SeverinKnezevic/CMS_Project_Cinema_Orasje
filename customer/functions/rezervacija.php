<?php
define ("HOST", "localhost");
define ("USER", "root");
define ("PASS", "");
define ("DB", "kino");


	$con=mysqli_connect ("localhost", "root","","kino");


include("functions/functions.php");
include('includes/db.php');

function dodaj_rezervaciju ($filmovi_id,$customer_id,$filmovi_datum_p,$filmovi_datum_r){
	$sql="INSERT INTO rezervacije VALUES (null,'".$filmovi_id."','".$customer_id."','".$filmovi_datum_p."','".$filmovi_datum_r."')";
	$con=mysqli_connect ("localhost", "root","","kino");
mysqli_query ($con,$sql)or die (mysqli_error());}


function provjeri_login () {
	
	if (isset ($_SESSION['customer'])) {
		$customer_id = intval($_SESSION['customer']);
		global $_CUSTOMERS;
		$_CUSTOMER = daj_korisnika($customer_id);
		if ($_CUSTOMER == false) {
			
			$podaci = array ("greska" => "<b>Greška u provjeri:</b> Nemate pristup ovoj funkcionalnosti.");
			
			
			die();
		}else {
		header ("Location:index.php");
	}
	} 
}

function daj_korisnika ($id) {
	$sql = "SELECT * FROM customers WHERE customer_id='".$customer_id."'";
	$upit = mysql_query ($sql) or die (mysql_error());
return mysql_fetch_assoc($upit);	}

function daj_film($id){
	$sql = "SELECT * FROM filmovi WHERE filmovi_id = '".$filmovi_id."'";
	$upit=mysql_query ($sql) or die (mysql_error());
	return mysql_fetch_assoc($upit);
}
 ?>