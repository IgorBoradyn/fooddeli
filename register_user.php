<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Utwórz konto</title>
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

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Utwórz konto</h2>

<div class="container">
  	<div class="row">
    	<div class="col-3 text-center"></div>
    	<div class="col-6"></div>
    	<div class="col-3 text-center">
     		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn border bordercolor resto shadow-none" id='back' type="button" onclick="location.href='register_restaurant.php'" style="margin-top: -95px; background: rgb(234, 236, 239);">Dołącz restaurację</button>
			</div>
    	</div>
  	</div>
</div>


<form class="needs-validation pt-2 bg-light" novalidate>
	<div class="form-row" style="width: 40%; margin-left: auto; margin-right: auto;">
		<div class="col placeholder">
			<label for="validationCustom01">E-mail</label>
			<input type="email" class="form-control" id="validationCustom01" placeholder="E-mail" required>
			<div class="invalid-feedback">Niepoprawny e-mail</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
			<label for="validationCustom02">Hasło</label>
      		<input type="password" class="form-control" id="validationCustom02" placeholder="Hasło" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Twoje hasło powinno składać się z przynajmniej 8 znaków, zawierać zarówno małą i wielką literę oraz cyfrę." required>
			<div class="invalid-feedback">Niepoprawne hasło. Twoje hasło powinno składać się z przynajmniej 8 znaków, zawierać zarówno małą i wielką literę oraz cyfrę.</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
				<div class="col placeholder">
			<label for="validationCustom03">Potwierdź hasło</label>
      		<input type="password" class="form-control" id="validationCustom03" placeholder="Potwierdź hasło" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Twoje hasło powinno składać się z przynajmniej 8 znaków, zawierać zarówno małą i wielką literę oraz cyfrę." required>
			<div class="invalid-feedback">Niepoprawne hasło. Twoje hasło powinno składać się z przynajmniej 8 znaków, zawierać zarówno małą i wielką literę oraz cyfrę.</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
      		<label for="validationCustom04">Imię i nazwisko</label>
      		<input type="text" class="form-control" id="validationCustom04" placeholder="Wpisz swoje imię i nazwisko" required>
      		<div class="invalid-feedback">Należy podać imię i nazwisko</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
      		<label for="validationCustom05">Ulica</label>
      		<input type="text" class="form-control" id="validationCustom05" placeholder="Wpisz nazwę ulicy" required>
      		<div class="invalid-feedback">Nazwa ulicy jest wymagana</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
			<label for="validationCustom06">Numer budynku</label>
			<input type="text" class="form-control" id="validationCustom06" placeholder="Wpisz numer budynku" required>
			<div class="invalid-feedback">Numer domu jest wymagany</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
			<label for="validationCustom07">Numer mieszkania</label>
			<input type="text" class="form-control" id="validationCustom07" placeholder="Wpisz numer mieszkania" required>
			<div class="invalid-feedback">Numer mieszkania jest wymagany</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
			<label for="validationCustom08">Numer telefonu</label>
			<input type="tel" class="form-control" id="validationCustom08" placeholder="Wpisz swój numer telefonu" pattern="[0-9]{9}" required>
			<div class="invalid-feedback">Należy podać numer telefonu</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
      		<label for="validationCustom09">Kod pocztowy</label>
			<input type="text" class="form-control" id="validationCustom09" placeholder="Wpisz swój kod pocztowy" pattern="[0-9]{2}[-][0-9]{3}" required>
      		<div class="invalid-feedback">Należy podać kod pocztowy</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col placeholder">
			<label for="validationCustom10">Miasto</label>
			<input type="text" class="form-control" id="validationCustom10" placeholder="Wpisz swoje miasto" required>
			<div class="invalid-feedback">Należy podać miasto</div>
		</div>
		<div class="w-100" style="padding-top: 30px"></div>
		<div class="col">
     		<p class="text-right">Klikając przycisk „Uwtórz konto”, akceptujesz <a style="color: #fd7e14" href="statute.php">regulamin serwisu oraz politykę prywatności</a>.</p>
    	</div>
        <div class="w-100" style="padding-top: 30px"></div>
		<div class="col">    	
			<div class="col text-center pb-4">
 				<button class="btn border bordercolor resto shadow-none btn-lg" id='back' type="submit" style="background: rgb(234, 236, 239);">Utwórz konto</button>
    		</div>
			<div class="text-center">
    			<p>Masz już konto? <a href='login.php' style="color: #fd7e14">Zaloguj się</a></p>
 			</div>
		</div>
	</div>
</form>

<footer class="page-footer font-small bg-light"><div class="row" style="width: 85%; margin-left: auto; margin-right: auto;">
	<div class="footer-copyright text-center py-3">© 2022 Copyright:
    	<a href="https://moodle.uwm.edu.pl/enrol/index.php?id=5426/" style="color:black"> FoodDeli.pl</a>
  	</div>
</footer>

<script>
	$("header").load("navbar.php");
</script>

</body>
</html>

<script>
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
    confirm_password.setCustomValidity("Passwords Don't Match");
  } else {
    confirm_password.setCustomValidity('');
  }
}

password.onchange = validatePassword;
confirm_password.onkeyup = validatePassword;
</script>

