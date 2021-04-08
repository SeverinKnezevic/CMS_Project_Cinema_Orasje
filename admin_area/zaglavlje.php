<?php include_once ('functions/functions.php') ?>
<!DOCTYPE html>

<html lang="en">
  <head>
    <link rel="shortcut icon" href="logo1.ico">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>KINO Orašje</title>
	
<!-- Bootstrap -->
<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="pocetna.css"/>
<link rel="stylesheet" type="text/css" href="filmovi.css"/
	<style type="text/css">
</head>

<body background="kino2.jpg">

<nav class="navbar navbar-default">
<div class="container-fluid">
<div class="navbar-header" >
  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"  >
	<span class="sr-only">Toggle navigation</span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
	<span class="icon-bar"></span>
  </button>
	<a class="navbar-brand" href="index.php"> <blink> <img alt="Brand" src="kino.jpg" height="110" width="200"></blink></a>
</div>

 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		<ul class="nav navbar-nav">
		
			<li><a href="filmovi.php">FILMOVI</a></li>
			<li><a href="rezervacije.php">Rezervacije</a></li>
			<li><a href="korisnici.php">Korisnici</a></li>

		</ul>
<!--Lijevo gore-->			
		 <ul class="nav navbar-nav navbar-right">


			<li ><a href="logout.php" ><span class="glyphicon glyphicon-off" aria-hidden="true"> </span> Odjavi se</span></a> 
			
	</div>
	</div>
	</nav>			

</body>
</html>