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
<link rel="stylesheet" type="text/css" href="customer_login.css"/
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

            <form method="post" action="" action="login" accept-charset="UTF-8"  >
                <span id="reauth-email" class="reauth-email"></span>
                <p class="input_title">Email</p>
                <input type="email" name="email" class="form-control" id="exampleInputEmail2" placeholder="ivoivic@gmail.com" required autofocus>
                <p class="input_title">Lozinka</p>
                <input type="password"  name="pass" class="form-control" id="exampleInputPassword2" placeholder="******" required>
                <div id="remember" class="checkbox">
                    <label>
                        
                    </label>
                </div>
				
                <div class="form-group">
				<input type="submit" class="btn btn-primary btn-block" name="login" value="Prijavi se" />
			</div>
            </form><!-- /form -->
        </div><!-- /card-container -->
    </div><!-- /container -->
    
	
</body>
</html>

<?php 
	if(isset($_POST['login'])){
	
		$customer_email = $_POST['email'];
		$customer_pass = $_POST['pass'];
		
		$sel_customer = "select * from customers where customer_pass='$customer_pass' AND customer_email='$customer_email'";
		
		$run_customer = mysqli_query($con, $sel_customer);
		
		$check_customer = mysqli_num_rows($run_customer); 
		
		if($check_customer==0){
		
		
		echo "<script>alert('Podaci za prijavu nisu dobri!')</script>";
		echo "<script>window.open('index.php','_self')</script>";
		}
		$ip = getIp(); 
		
		$sel_cart = "select * from cart where ip_add='$ip'";
		
		$run_cart = mysqli_query($con, $sel_cart); 
		
		$check_cart = mysqli_num_rows($run_cart); 
		
		if($check_customer>0 AND $check_cart==0){
		
		$_SESSION['customer_email']=$customer_email; 
		
		
		echo "<script>window.open('customer/index.php','_self')</script>";
		
		}
		
	}
	
	
	?>