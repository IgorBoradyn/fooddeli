<?php
    session_start();
	if(!(isset($_SESSION['logged']) && $_SESSION['logged']))
		header('Location: index.php');
?>

<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Zmień hasło</title>
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

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Zmień hasło</h2>

<div class="container">
  	<div class="row">
    	<div class="col-2 text-center">
      		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn btn-light border" id='back' type="button" onclick="location.href='account.php'" style="margin-top: -95px; width: 90px" >Powrót</button>
			</div>
    	</div>
  	</div>
</div>

<form method="post" action="change_password_valid.php" class="needs-validation pt-2 bg-light">
	<div class="form-row" style="width: 40%; margin-left: auto; margin-right: auto;">
		<div class="col placeholder">
			<label for="validationCustom02">Dotychczasowe hasło</label>
      		<input type="password" class="form-control" id="validationCustom01" name="old_password" placeholder="Hasło" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Wprowadź dotychczasowe hasło" required>
			<div class="invalid-feedback old-password">Wprowadzone dotychczasowe hasło jest niepoprawne</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
			<label for="validationCustom02">Nowe hasło</label>
      		<input type="password" class="form-control" id="validationCustom02" name="new_password" placeholder="Hasło" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Twoje hasło powinno składać się z przynajmniej 8 znaków, zawierać zarówno małą i wielką literę oraz cyfrę." required>
			<div class="invalid-feedback">Niepoprawne hasło. Twoje hasło powinno składać się z przynajmniej 8 znaków, zawierać zarówno małą i wielką literę oraz cyfrę.</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
				<div class="col placeholder">
			<label for="validationCustom03">Powtórz hasło</label>
      		<input type="password" class="form-control" id="validationCustom03" placeholder="Powtórz hasło" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Twoje hasło powinno składać się z przynajmniej 8 znaków, zawierać zarówno małą i wielką literę oraz cyfrę." required>
			<div class="invalid-feedback">Niepoprawne hasło. Twoje hasło powinno składać się z przynajmniej 8 znaków, zawierać zarówno małą i wielką literę oraz cyfrę.</div>
		</div>
        <div class="w-100" style="padding-top: 30px"></div>
		<div class="col">    	
			<div class="col text-center pb-4">
 				<button class="btn border bordercolor resto shadow-none btn-lg" id='back' type="submit" style="background: rgb(234, 236, 239);">Zmień hasło</button>
    		</div>
		</div>
		<div class="change-ok" style="display: none; color: green;">Zmiana przebiegła pomyślnie</div>
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
    if (isset($_SESSION['change_err'])){
		if ($_SESSION['change_err']){
?> 
			$('.old-password').css('display', 'block');
<?php 	
		} 
		else {
?>
			$('.change-ok').css('display', 'block');
<?php 	}
		unset($_SESSION['change_err']);
	} ?>

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

	var password = document.getElementById("validationCustom02")
	, confirm_password = document.getElementById("validationCustom03");

	function validatePassword(){
		if(password.value != confirm_password.value) {
			confirm_password.setCustomValidity("Hasła nie są takie same");
		} else {
			confirm_password.setCustomValidity('');
		}
	}

	password.onchange = validatePassword;
	confirm_password.onkeyup = validatePassword;
</script>

</body>
</html>
