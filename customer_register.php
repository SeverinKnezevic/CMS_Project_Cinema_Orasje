<?php
session_start();
include('functions/functions.php');
include('includes/db.php');
?>

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
<link rel="stylesheet" type="text/css" href="customer_register.css"/
	<style type="text/css">
</head>

<body>

<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

    <script src="https://use.typekit.net/ayg4pcz.js"></script>
    <script>try{Typekit.load({ async: true });}catch(e){}</script>

    <div class="container">
    <h1 class="welcome text-center">K I N O<br>Orašje</h1>
        <div class="card card-container">
        <h2 class='login_title text-center'>Prijavi se na stranicu</h2>
        <hr>

            <form class="" method="post" action="customer_register.php" enctype="multipart/form-data">
                <div class="form-group">
							<label for="name" class="cols-sm-2 control-label">Ime</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user fa" aria-hidden="true"></i></span>
									<input type="tex" class="form-control" name="c_name" id="name"  placeholder="Unesite ime korisnika" required/>
								</div>
							</div>
				</div>
				
			
						<div class="form-group">
							<label for="username" class="cols-sm-2 control-label">Korisničko ime</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-users fa" aria-hidden="true"></i></span>
									<input type="tex" class="form-control" name="c_username" id="username"  placeholder="Unesi korisničko ime" required/>
								</div>
							</div>
						</div>
						
                <div class="form-group">
							<label for="email" class="cols-sm-2 control-label">E-mail</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
									<input type="tex" class="form-control" name="c_email" id="email"  placeholder="Unesite E-mail korisnika" required/>
								</div>
							</div>
				</div>
						
                <div class="form-group">
							<label for="password" class="cols-sm-2 control-label">Šifra</label>
							<div class="cols-sm-10">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
									<input type="password" class="form-control" name="c_pass" id="password"  placeholder="Unesite šifru" required/>
								</div>
							</div>
				</div>
				
                <div class="form-group ">
							<input type="submit" title="Registriraj se" name="register" value="Registriraj se"  class="btn btn-primary btn-lg btn-block login-button" />
						</div>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    
</body>
</html>


<?php 
if(isset($_POST['register'])){

	
	$ip = getIp();
	
	$c_name = $_POST['c_name'];
	$c_username = $_POST['c_username'];
	$c_email = $_POST['c_email'];
	$c_pass = $_POST['c_pass'];


	
	 $insert_c = "insert into customers (customer_ip,customer_name,customer_username,customer_email,customer_pass) values ('$ip','$c_name','$c_username','$c_email','$c_pass')";

	$run_c = mysqli_query($con, $insert_c); 
	
	$sel_cart = "select * from cart where ip_add='$ip'";
	
	$run_cart = mysqli_query($con, $sel_cart); 
	
	$check_cart = mysqli_num_rows($run_cart); 
	
	if($check_cart==0){
	
	$_SESSION['customer_email']=$c_email; 
	
	echo "<script>alert('Uspješno ste napravili svoj korisnički račun!')</script>";
	echo "<script>window.open('customer/index.php','_self')</script>";
	
	}
	
}
?>
