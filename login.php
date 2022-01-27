<?php
    session_start();
	if(isset($_SESSION['logged']) && $_SESSION['logged'])
		header('Location: index.php');
?>

<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Logowanie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script>
</head>
<body class="bg-light">

<header></header>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Zaloguj się</h2>

<form method="post" action="log_validate.php" class="needs-validation pt-2 bg-light">
	<div class="form-row" style="width: 40%; margin-left: auto; margin-right: auto;">
		<div class="col placeholder">
			<label for="validationCustom01">E-mail</label>
			<input type="email" class="form-control" id="validationCustom01" name="email" placeholder="E-mail" name="email" required>
			<div class="invalid-feedback">Niepoprawny e-mail</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
			<label for="validationCustom02">Hasło</label>
      		<input type="password" class="form-control" id="validationCustom01" name="password" placeholder="Hasło" name="password" required>
			<div class="invalid-feedback">Niepoprawne hasło</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col">
     		<a href='reset_password.php' class="float-right pr-3" style="color: #fd7e14">Zapomniałeś hasła?</a>
    	</div>
        <div class="w-100" style="padding-top: 30px"></div>
		<div class="col">    	
			<div class="col text-center pb-4">
 				<button class="btn border bordercolor resto shadow-none btn-lg" id='back' type="submit" style="background: rgb(234, 236, 239);">Zaloguj się</button>
    		</div>
			<div class="text-center">
    			<p>Nie masz konta? <a href='register_user.php' style="color: #fd7e14">Uwtórz konto</a></p>
 			</div>
		</div>
		<div class="login-err" style="display: none; color: red;">Niepoprawne dane</div>
	</div>
</form>

<footer class="page-footer fixed-bottom font-small bg-light"><div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
	<div class="footer-copyright text-center py-3">© 2022 Copyright:
    	<a href="https://moodle.uwm.edu.pl/enrol/index.php?id=5426/" style="color:black"> FoodDeli.pl</a>
  	</div>
</footer>

<script>
	$("header").load("navbar.php");
<?php
    if (isset($_SESSION['login_err']) && $_SESSION['login_err']){
?> 
		$('.login-err').css('display', 'block');
<?php 	
		unset($_SESSION['login_err']);
	} 
?>

(function() {
	'use strict';
  	window.addEventListener('load', function() {
    	var forms = document.getElementsByClassName('needs-validation');
    	var validation = Array.prototype.filter.call(forms, function(form) {
      		form.addEventListener('submit', function(event) {
        		if (form.checkValidity() === false) {
          			event.preventDefault();
          			event.stopPropagation();
        		}
        		form.classList.add('was-validated');
     		}, false);
    	});
  	}, false);
})();
</script>

</body>
</html>