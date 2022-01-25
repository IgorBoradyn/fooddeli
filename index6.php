<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Podsumowanie</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  	<link rel="stylesheet" href="main.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script src="https://kit.fontawesome.com/6c40eaf681.js" crossorigin="anonymous"></script></head>
<body>

<header></header>

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Cudowne Manowce Restaurant</h2>

<div class="container">
  	<div class="row">
    	<div class="col-2 text-center">
      		<div class="bg-light text-center" style="height: 0px;">
				<button class="btn btn-light border" id='back' type="button" onclick="location.href='index5.php'" style="margin-top: -95px; width: 90px" >Powrót</button>
			</div>
    	</div>
  	</div>
</div>

<div class="containe bg-light">
	<div class="row">
		<div class="col-1"></div>
		<div class="col-5" style="border-right: 1px solid #dee2e6;">
			<div class="row">
				<div class="col">
					<h3 class='fluid bg-light text-center mb-0 pt-3 pb-4 lead'>Dane adresowe</h3>
				</div>
				<div class="w-100"></div>
				<div class="col pl-5">
					<form class="needs-validation" novalidate>
  						<div class="form-row">
  							<div class="col-10 pb-1">
      							<label for="validationCustom07">Imię i nazwisko</label>
      							<input type="text" class="form-control" id="validationCustom07" placeholder="Wpisz swoje imię i nazwisko" required>
      							<div class="invalid-feedback">Należy podać imię i nazwisko</div>
    						</div>
    						<div class="w-100"></div>
    						<div class="col-10 pb-1 pt-1">
      							<label for="validationCustom01">Ulica</label>
      							<input type="text" class="form-control" id="validationCustom01" placeholder="Wpisz nazwę ulicy" required>
      							<div class="invalid-feedback">Nazwa ulicy jest wymagana</div>
    						</div>
    						<div class="w-100"></div>
						    <div class="col-10 pb-1 pt-1">
							    <label for="validationCustom02">Numer budynku</label>
							    <input type="text" class="form-control" id="validationCustom02" placeholder="Wpisz numer budynku" required>
							    <div class="valid-feedback">Looks good!</div>
								<div class="invalid-feedback">Numer domu jest wymagany</div>
						    </div>
   							<div class="w-100"></div>
						    <div class="col-10 pb-1 pt-1">
							    <label for="validationCustom03">Numer mieszkania</label>
							    <input type="text" class="form-control" id="validationCustom03" placeholder="Wpisz numer mieszkania" required>
								<div class="invalid-feedback">Numer mieszkania jest wymagany</div>
						    </div>
							<div class="w-100"></div>
						    <div class="col-10 pb-1 pt-1">
						      	<label for="validationCustom04">Numer telefonu</label>
						      	<input type="tel" class="form-control" id="validationCustom04" placeholder="Wpisz swój numer telefonu" pattern="[0-9]{9}" required>
						      	<div class="invalid-feedback">Należy podać numer telefonu</div>
						    </div>							
						    <div class="w-100"></div>
						    <div class="col-3 pb-1 pt-1">
      							<label for="validationCustom05">Kod pocztowy</label>
								<input type="text" class="form-control" id="validationCustom05" placeholder="Wpisz swój kod pocztowy" pattern="[0-9]{2}[-][0-9]{3}" required>
      							<div class="invalid-feedback">Należy podać kod pocztowy</div>
    						</div>
						    <div class="col-7 pb-1 pt-1">
						      	<label for="validationCustom06">Miasto</label>
						      	<input type="text" class="form-control" id="validationCustom06" placeholder="Wpisz swoje miasto" required>
						      	<div class="invalid-feedback">Należy podać miasto</div>
						    </div>
  						</div>
  						<div class="form-group">
    						<div class="form-check pb-1 pt-1">
      							<input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      							<label class="form-check-label" for="invalidCheck">Akceptuję regulami FoodDeli.pl</label>
      							<div class="invalid-feedback">Należy zaakceptować regulamin</div>
    						</div>
  						</div>
  						<div class="container">
  							<div class="row">
    							<div class="col text-center pt-4 pb-4">
      								<div class="bg-light text-center" style="height: 0px;">
										<button class="btn border bordercolor resto shadow-none btn-lg" id='back' type="submit" onclick="location.href='index7.php'" style="background: rgb(234, 236, 239);">Zamawiam i płacę</button>
									</div>
    							</div>
  							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div class="col-5" style="border-left: 1px solid #dee2e6;">
			<div class="row">
				<div class="col">
					<h3 class='fluid bg-light text-center mb-0 pt-3 pb-4 lead'>Metody płatności</h3>
				</div>
				<div class="w-100"></div>
				<div class="col pl-5">
					<div class="custom-control custom-radio pb-1">
						<input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" checked>
					  	<label class="custom-control-label" for="customRadio1">PayU</label>
					</div>
					<div class="custom-control custom-radio pb-1">
					  	<input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
					  	<label class="custom-control-label" for="customRadio2">Gotówka</label>
					</div>
					<div class="custom-control custom-radio pb-1">
						<input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
					  	<label class="custom-control-label" for="customRadio3">Karta kredytowa</label>
					</div>
					<div class="custom-control custom-radio pb-1">
					  	<input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
					  	<label class="custom-control-label" for="customRadio4">PayPal</label>
					</div>
				</div>
			</div>
		</div>
		<div class="col-1"></div>
	</div>
</div>

</div>

<footer class="page-footer font-small bg-light"><div class=​"row" style=​"width:​ 85%;​ margin-left:​ auto;​ margin-right:​ auto;​">​
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
</script>