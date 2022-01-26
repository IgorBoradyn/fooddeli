<!DOCTYPE html>
<html lang='pl'>
<head>
	<meta charset="utf-8">
	<title>FoodDeli - Moje konto</title>
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

<h2 class='fluid bg-light text-center mb-0 pt-4 pb-3'>Moje konto</h2>

<div class="container">
	<div class="row">
  		<div class="col-1"></div>
  		<div class="col-5 border-right pt-4 pb-4">
			<form class="needs-validation" novalidate>
  				<div class="form-row">
					<div class="col-10 pb-1 pt-1">
      					<label for="validationCustom07">E-mail</label>
      					<input type="text" class="form-control" id="validationCustom01" placeholder="z bazy danych" disabled>
      					<label for="validationCustom07">Imię i nazwisko</label>
      					<input type="text" class="form-control" id="validationCustom02" placeholder="z bazy danych" disabled>
      					<label for="validationCustom07">Ulica</label>
      					<input type="text" class="form-control" id="validationCustom03" placeholder="z bazy danych" disabled>
      					<label for="validationCustom07">Numer budynku</label>
      					<input type="text" class="form-control" id="validationCustom04" placeholder="z bazy danych" disabled>
      					<label for="validationCustom07">Numer mieszkania</label>
      					<input type="text" class="form-control" id="validationCustom05" placeholder="z bazy danych" disabled>
      					<label for="validationCustom07">Numer telefonu</label>
      					<input type="text" class="form-control" id="validationCustom06" placeholder="z bazy danych" disabled>
      					<label for="validationCustom07">Kod pocztowy</label>
      					<input type="text" class="form-control" id="validationCustom07" placeholder="z bazy danych" disabled>
      					<label for="validationCustom07">Miasto</label>
      					<input type="text" class="form-control" id="validationCustom08" placeholder="z bazy danych" disabled>
    				</div>
    			</div>
			</form>
  		</div>
  		<div class="col-5 border-left pt-4 text-center">
  			<div class="btn-group-vertical" role="group" aria-label="Basic example">
  				<button type="button" class="btn border bordercolor resto shadow-none mb-3 rounded" style="background: rgb(234, 236, 239);" onclick="location.href='index_change_email.php'">Zmień e-mail</button>
  				<button type="button" class="btn border bordercolor resto shadow-none mb-3 rounded" style="background: rgb(234, 236, 239);" onclick="location.href='index_change_password.php'">Zmień hasło</button>
			</div>
  		</div>
  		<div class="col-1"></div>
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
